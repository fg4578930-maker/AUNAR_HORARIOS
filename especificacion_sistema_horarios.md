# Especificación Técnica — Sistema de Generación Automática de Horarios Académicos

**Stack:** Laravel (backend) + Blade (frontend) + MySQL/MariaDB
**Objetivo:** Automatizar la construcción de horarios académicos por programa, plan de estudios y semestre, minimizando la intervención manual y evitando cruces de docentes, aulas y jornadas.

---

## 1. Roles y permisos

| Rol | Alcance |
|---|---|
| **Administrador** | Control total (CRUD) sobre todos los módulos. Gestiona usuarios (crear/editar/eliminar docentes y coordinadores). Puede generar el horario general de todos los programas, completar programas faltantes o regenerar desde cero. |
| **Coordinador de programa** | Acceso total al módulo **Generador de horarios** y **Horarios generados**, pero limitado a su(s) programa(s) académico(s) asignado(s). Puede crear/editar horarios de todos los semestres de su programa, mover materias entre jornadas (ej. de diurna a sabatina), y filtrar/descargar por distintos criterios. Solo consulta en el resto de módulos (periodos, docentes, aulas, asignaturas, etc.). |
| **Docente (usuario regular)** | Solo puede consultar y descargar su propio horario (materias asignadas, aulas, franjas), presentado en formato de calendario. Sin acceso de edición a ningún módulo. |

**Implementación recomendada:** usar **Spatie Laravel-Permission** con 3 roles (`admin`, `coordinador`, `docente`) y un permiso adicional `coordinador_programa_id` (relación N:M `coordinador ↔ programa_academico`) para restringir el alcance del coordinador a sus programas asignados.

**Middleware:** cada ruta de módulo valida rol + (si aplica) pertenencia del coordinador al programa consultado.

---

## 2. Modelo de datos por módulo

### 2.1 Usuarios (`users`)
```
id, nombre_completo, documento, correo, password, rol (enum: admin|coordinador|docente), estado (activo|inactivo)
```
- Relación `coordinador_programas` (pivote `coordinador_programa`) solo si rol = coordinador.
- Relación `docente_id` opcional si el usuario docente está vinculado a un registro de la tabla `docentes` (recomendado: **unificar** — un `docente` de la tabla 2.3 puede tener una cuenta de usuario asociada vía `user_id` nullable, para no duplicar información).

### 2.2 Periodos académicos (`periodos_academicos`)
```
id, periodo (enum: 1|2), anio, fecha_inicio, fecha_fin, estado (activo|cerrado), created_at, updated_at
```
- Reglas:
  - Puede haber más de un periodo activo simultáneamente (caso transición), pero la UI debe mostrar claramente cuál es el **periodo por defecto** (el más reciente activo) al entrar a otros módulos.
  - **Borrado en cascada controlado**: nunca DELETE físico. Al "eliminar" un periodo, se marca `estado = cerrado` y se bloquea la edición de ofertas/horarios asociados (soft delete + guard de integridad).
  - Todas las tablas de `oferta_academica` y `horarios_generados` llevan `periodo_id` obligatorio.

### 2.3 Docentes (`docentes`)
```
id, documento, nombre_completo, correo_institucional, celular, vinculacion (enum: tiempo_completo|medio_tiempo|horas), horas_max_semanales (int), estado (activo|inactivo)
```
- `horas_max_semanales` se autocompleta según `vinculacion` (valores configurables por el admin, ej. TC=40, MT=20, Horas=null/manual) pero editable por asignación individual si aplica.
- Regla de negocio dura: **un docente nunca puede tener dos sesiones en la misma franja/día** (validada en el generador y en la asignación manual).
- Regla de negocio: la suma de horas semanales asignadas (vía `distribucion_docente`) no puede superar `horas_max_semanales` — se valida como advertencia no bloqueante en distribución, y como bloqueo duro en el generador.

### 2.4 Programas académicos (`programas_academicos`)
```
id, codigo, nombre, facultad, num_planes_estudio (calculado), estado (activo|inactivo)
```
- `num_planes_estudio` = `COUNT(planes_estudio WHERE programa_academico_id = id)`, mostrado como campo de solo lectura (accessor de Eloquent, no columna física, o columna cacheada actualizada por observer).

### 2.5 Aulas (`aulas`)
```
id, nombre, tipo (enum configurable: salon_normal|laboratorio|auditorio|sala_movil|taller|otro, gestionado por admin en tabla aparte `tipos_aula`), piso (nullable, int), capacidad, exclusividad (enum: general|exclusiva|no_disponible), created_at
```
- Tabla pivote `aula_programa_exclusivo` (aula_id, programa_academico_id) — máximo 2 registros por aula cuando `exclusividad = exclusiva`.
- `piso`: se deriva automáticamente del primer dígito del nombre cuando es numérico (ej. "Salón 213" → piso 2); si el nombre es texto libre (Auditorio, Sala MAC, Laboratorio de Ingeniería, Virtual), el campo `piso` queda nulo y se ingresa manualmente si aplica.
- Aulas con `exclusividad = no_disponible` quedan fuera del pool que usa el generador.

### 2.6 Asignaturas (`asignaturas`)
```
id, codigo, nombre, creditos, tipo (enum: teorica|teorico_practica|practica), estado (activo|inactivo)
```
- No almacena horas de clase (eso vive en la franja horaria seleccionada en la oferta académica).
- Campo adicional recomendado: `requiere_laboratorio` (boolean) + `aula_preferida_id` (nullable, FK a `aulas`) — implementa la petición del punto D: el generador intenta primero esa aula específica; si no está disponible en el horario objetivo, cae a cualquier aula compatible por capacidad/tipo, dejando la advertencia visible.

### 2.7 Planes de estudio (`planes_estudio`)
```
id, programa_academico_id, nombre_plan, tipo (enum: nuevo|antiguo), num_asignaturas (calculado), num_semestres (int), estado
```
- Tabla pivote `plan_estudio_asignatura` (plan_estudio_id, asignatura_id, semestre) — vincula asignaturas a un plan y semestre específico.
- Un programa puede tener 0, 1 o 2 planes (nuevo/antiguo simultáneos) — sin restricción de unicidad más allá de (programa, tipo).

### 2.8 Franjas horarias (`franjas_horarias`)
```
id, nombre, hora_inicio, hora_fin, jornada (enum: D|N|S), duracion_minutos (calculado o fijo: 120 normal, 180 SST), estado
```
- **Decisión final (según tus respuestas):** no se crea una franja "multijornada" independiente. Cada franja pertenece a una sola jornada (D/N/S). El caso especial que mencionaste (ej. Práctica Profesional martes 6pm que no encaja en ninguna jornada estándar) se resuelve creando una **franja horaria puntual con jornada asignada manualmente** (ej. jornada "N" aunque el resto de la noche sea distinta), sin necesidad de una categoría nueva — el sistema no impone que todas las franjas de una jornada compartan el mismo horario exacto.
- El concepto de multijornada/nocturna-sabatina vive como **flags en la oferta académica** (ver 2.9), no en la franja.

### 2.9 Ofertas académicas (`ofertas_academicas`)
```
id, periodo_id, programa_academico_id, plan_estudio_id, asignatura_id, semestre, cupo_max, modalidad (enum: presencial|virtual_asincronica|virtual_sincronica), momento (enum: MO1|MO2|S16), jornada (enum: D|N|S), es_multijornada (boolean), es_fusionada (boolean), oferta_fusion_id (nullable, self-FK — apunta a la oferta con la que se fusiona), es_compartida (boolean), estado
```
- Tabla `oferta_compartida_programa` (oferta_id, programa_academico_id, cupo_asignado) — replica el patrón visto en tus datos reales (`AE 20 + CP 20 (40)`): cada programa participante de una oferta compartida aporta un cupo parcial que suma el `cupo_max` total.
- Cuando `es_fusionada = true`, la oferta "hija" (plan antiguo) apunta a `oferta_fusion_id` (oferta "madre", plan nuevo) y **hereda automáticamente** docente, aula, franja y jornada de la madre — se bloquean esos campos en la edición de la hija para evitar inconsistencias.
- Regla `MO1`/`MO2`: dos ofertas en la misma aula pueden coexistir en el mismo bloque horario si una es MO1 y otra MO2 del mismo periodo (uso secuencial del aula) — el generador debe tratarlas como **no conflictivas** en validación de aula, a diferencia de S16 que sí requiere el aula reservada las 16 semanas.

### 2.10 Distribución de docentes (`distribucion_docente`)
```
id, docente_id, oferta_academica_id, created_at
```
- Se define **antes** de correr el generador (según tu respuesta al punto 10). El generador solo ubica en el tiempo lo que ya está aquí vinculado.
- Vista de "carga académica por docente": suma de créditos/horas de las ofertas vinculadas, comparada contra `horas_max_semanales` del docente, con indicador visual (verde/amarillo/rojo) de sobrecarga.

### 2.11 Horarios generados (`horarios_generados`)
```
id, oferta_academica_id, franja_horaria_id, aula_id (nullable si virtual/asincrónica), dia_semana (enum: lunes..sabado), estado (generado|manual|confirmado), generado_en, confirmado_en
```
- Es la tabla resultado, tanto de la generación automática como de la asignación manual posterior.
- `estado = manual` marca las que el admin/coordinador ubicó a mano tras un fallo del generador.
- Confirmar el horario (botón "Confirmar") cambia todas las filas del batch a `estado = confirmado` y las vuelve inmutables salvo reapertura explícita.

---

## 3. Lógica del generador de horarios (backtracking)

### 3.1 Entradas del formulario
Periodo → Programa académico → Plan de estudios → Semestre(s) (multi-select) → Jornada(s) (multi-select D/N/S) → Franja(s) horaria(s) dentro de cada jornada → Configuraciones especiales (multijornada, nocturna/sabatina) → botón **Generar** o **Cancelar**.

### 3.2 Algoritmo (por lote de ofertas seleccionado)
1. **Construir el conjunto de ofertas a ubicar**: todas las `ofertas_academicas` del programa/plan/semestre(s)/jornada(s) elegidos, con estado `pendiente`. Las fusionadas/compartidas se tratan como **una sola unidad de asignación** (se ubica una vez, se replica su resultado a todas las ofertas vinculadas).
2. **Ordenar** las ofertas de mayor a menor restricción (menos franjas/aulas compatibles primero) — heurística estándar de CSP para que el backtracking converja más rápido.
3. Para cada oferta, generar candidatos válidos cruzando:
   - Franjas seleccionadas de su jornada.
   - Aulas compatibles: capacidad ≥ `cupo_max`, tipo/exclusividad correctos, `aula_preferida_id` priorizada si existe y está libre.
   - Sin conflicto de docente (mismo docente no puede estar en otra franja/día simultáneo, en ningún programa).
   - Sin conflicto de aula (salvo regla MO1/MO2 descrita en 2.9).
   - Modalidad virtual/asincrónica → aula = null automáticamente.
4. **Backtracking con función objetivo**: al haber varios candidatos válidos, puntuar cada opción penalizando huecos entre clases del mismo semestre y del mismo docente (para minimizar horas muertas), y probar primero la de mejor puntaje; si una rama posterior falla, retroceder y probar la siguiente opción con backtrack limitado (profundidad razonable, ej. hasta 3 reintentos por oferta antes de marcarla como no ubicada).
5. Si una oferta agota candidatos, se marca `no ubicada` con el **motivo específico** (ej. "sin aulas disponibles con capacidad ≥ 40 en franjas D seleccionadas", "conflicto de docente en todas las franjas disponibles").
6. Al finalizar, mostrar resumen: ✅ ubicadas / ❌ no ubicadas (con motivo) → el usuario decide "Continuar" (persiste lo generado como `estado = generado`) o "Cancelar" (descarta todo).
7. Las no ubicadas quedan disponibles para **asignación manual** en el módulo de horarios generados: al intentar guardar manualmente, el sistema re-valida los mismos cruces (docente, aula, capacidad) y **bloquea con advertencia** si hay conflicto, sugiriendo franjas libres alternativas (mismo cálculo del paso 3, pero mostrado como sugerencias en vez de aplicarse automáticamente).
8. Botón **Confirmar horario** → cambia estado a `confirmado`.

---

## 4. Módulo "Horarios generados" (consulta)

- Vista tipo calendario semanal (librería recomendada: FullCalendar.js vía CDN, integrado en Blade).
- Filtros: periodo, programa, plan de estudios, semestre, jornada, docente.
- Exportación/descarga: PDF por filtro aplicado (usa la librería `dompdf` o `barryvdh/laravel-dompdf`, ya que el proyecto es 100% Laravel/Blade).
- Vista de docente: mismo calendario pero pre-filtrado y bloqueado a su propio `docente_id`, con botón de descarga directa.

---

## 5. Lineamientos UX/UI por módulo (Blade)

**Principio general:** navegación por tarjetas en el dashboard, formularios cortos con validación en vivo (Livewire o Alpine.js + fetch), tablas con búsqueda/filtro instantáneo (DataTables o Livewire tables), y confirmaciones modales antes de cualquier eliminación.

| Módulo | Prioridades UX |
|---|---|
| Dashboard | Tarjetas grandes con ícono + contador (ej. "12 docentes activos"), acceso directo a "Generador de horarios" destacado para coordinador |
| Periodos / Docentes / Programas / Aulas / Asignaturas / Planes | Tabla con CRUD in-place (modal de creación/edición), filtro de estado (activo/inactivo), badges de color por estado |
| Franjas horarias | Selector visual tipo "chips" por jornada, vista previa de franjas ya creadas agrupadas por jornada |
| Ofertas académicas | Formulario en pasos (wizard): 1) selección programa/plan/periodo → 2) selección asignatura+cupo+modalidad → 3) configuración de fusión/compartida (checkbox que despliega selector de oferta relacionada/programas participantes) |
| Distribución docente | Vista dual: panel izquierdo lista de docentes con carga (barra de progreso vs. horas_max), panel derecho drag-and-drop de asignaturas disponibles |
| Generador de horarios | Formulario progresivo con validación (no dejar avanzar sin programa+plan+jornada), resultado en dos columnas: "Ubicadas ✅" / "No ubicadas ❌ (con motivo)", barra de progreso durante el cálculo |
| Horarios generados | Calendario semanal interactivo, drag-and-drop deshabilitado tras confirmación, botón de descarga siempre visible |

---

## 6. Orden de desarrollo sugerido
1. Autenticación + roles (Spatie) + dashboard base
2. Periodos, Docentes, Programas, Aulas, Asignaturas (módulos independientes, CRUD simple)
3. Planes de estudio (depende de programas + asignaturas)
4. Franjas horarias
5. Ofertas académicas (depende de todo lo anterior — el módulo más complejo del set de "catálogo")
6. Distribución de docentes
7. Generador de horarios (motor de backtracking)
8. Horarios generados (consulta/calendario/exportación)

---

## 7. Consideraciones técnicas adicionales
- Usar **transacciones DB** en la generación de horarios (todo el lote se persiste o se revierte junto).
- Índices compuestos en `horarios_generados` sobre (`aula_id`, `franja_horaria_id`, `dia_semana`) y en `distribucion_docente` sobre (`docente_id`) para acelerar las validaciones de cruce, que se ejecutan con alta frecuencia durante el backtracking.
- Considerar un job en cola (Laravel Queue) para la generación si el volumen de ofertas por programa es alto, mostrando progreso vía Livewire/websockets en vez de bloquear la petición HTTP.
