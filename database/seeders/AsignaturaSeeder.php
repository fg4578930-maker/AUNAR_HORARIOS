<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Asignatura;
use App\Models\Programa;
use Illuminate\Database\Seeder;
=======
use Illuminate\Database\Seeder;
use App\Models\Asignatura;
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d

class AsignaturaSeeder extends Seeder
{
    public function run(): void
    {
<<<<<<< HEAD
        // ==========================================
        // 1. ADMINISTRACIÓN DE EMPRESAS (Código: 102519)
        // ==========================================
        $progAdmin = Programa::where('codigo', '102519')->first();
        if ($progAdmin) {
            // Plan Antiguo
            $adminAntiguo = [
                // Semestre 1
                ['codigo' => 'AEPA01', 'nombre' => 'Procedimientos matemáticos', 'plan_estudios' => 'Antiguo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA02', 'nombre' => 'Ordenamiento jurídico constitucional e institucional', 'plan_estudios' => 'Antiguo', 'semestre' => 1, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA03', 'nombre' => 'Principios de administración', 'plan_estudios' => 'Antiguo', 'semestre' => 1, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA04', 'nombre' => 'Principios básicos de contabilidad', 'plan_estudios' => 'Antiguo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA05', 'nombre' => 'Herramientas pedagógicas y didácticas de la educación a distancia', 'plan_estudios' => 'Antiguo', 'semestre' => 1, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 2
                ['codigo' => 'AEPA06', 'nombre' => 'Procesos estadísticos y probabilístico', 'plan_estudios' => 'Antiguo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA07', 'nombre' => 'Bases jurídicas de la actividad empresarial', 'plan_estudios' => 'Antiguo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA08', 'nombre' => 'Planeación empresarial', 'plan_estudios' => 'Antiguo', 'semestre' => 2, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA09', 'nombre' => 'Procedimientos contables en el manejo de activos', 'plan_estudios' => 'Antiguo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA10', 'nombre' => 'Agentes microeconómicos', 'plan_estudios' => 'Antiguo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA11', 'nombre' => 'Métodos y técnicas de investigación', 'plan_estudios' => 'Antiguo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 3
                ['codigo' => 'AEPA12', 'nombre' => 'Álgebra y programación lineal', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA13', 'nombre' => 'Organización empresarial', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA14', 'nombre' => 'Procedimientos contables en el manejo de pasivos', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA15', 'nombre' => 'Agentes macroeconómicos', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA16', 'nombre' => 'Mercados capitales', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA17', 'nombre' => 'Habilidades comunicativas básicas en segunda lengua', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 4
                ['codigo' => 'AEPA18', 'nombre' => 'Investigación de operaciones', 'plan_estudios' => 'Antiguo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA19', 'nombre' => 'Dirección y control', 'plan_estudios' => 'Antiguo', 'semestre' => 4, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA20', 'nombre' => 'Procedimientos contables de patrimonio y sociedades', 'plan_estudios' => 'Antiguo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA21', 'nombre' => 'Matemáticas financiera', 'plan_estudios' => 'Antiguo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA22', 'nombre' => 'Elementos básicos del mercadeo', 'plan_estudios' => 'Antiguo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA23', 'nombre' => 'Procesos comunicativos en segunda lengua', 'plan_estudios' => 'Antiguo', 'semestre' => 4, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 5
                ['codigo' => 'AEPA24', 'nombre' => 'Administración de la producción', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA25', 'nombre' => 'Sistema de costos', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA26', 'nombre' => 'Conocimientos básicos tributarios en la gerencia empresarial', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA27', 'nombre' => 'Investigación de mercados', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA28', 'nombre' => 'La segunda lengua como herramienta de comunicación', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 6
                ['codigo' => 'AEPA29', 'nombre' => 'Administración del talento humano', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA30', 'nombre' => 'Herramientas tecnológicas aplicadas a los procesos administrativos', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA31', 'nombre' => 'Salud ocupacional', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA32', 'nombre' => 'El presupuesto como herramienta gerencial', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA33', 'nombre' => 'Gerencia de mercadeo', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 7
                ['codigo' => 'AEPA34', 'nombre' => 'Administración pública', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA35', 'nombre' => 'Gerencia de la calidad', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA36', 'nombre' => 'Electiva I', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA37', 'nombre' => 'Análisis financiero en el área administrativa', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA38', 'nombre' => 'Formulación y evaluación de proyectos', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA39', 'nombre' => 'Psicología organizacional', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 8
                ['codigo' => 'AEPA40', 'nombre' => 'Administración finca raíz', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA41', 'nombre' => 'Electiva II', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA42', 'nombre' => 'Normas de auditoría y conceptos de control interno', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA43', 'nombre' => 'Comercio internacional', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA44', 'nombre' => 'Proyecto de investigación', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA45', 'nombre' => 'Leyes éticas y morales', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 9
                ['codigo' => 'AEPA46', 'nombre' => 'Procesos gerenciales en la administración', 'plan_estudios' => 'Antiguo', 'semestre' => 9, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA47', 'nombre' => 'Práctica empresarial', 'plan_estudios' => 'Antiguo', 'semestre' => 9, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA48', 'nombre' => 'Gerencia financiera', 'plan_estudios' => 'Antiguo', 'semestre' => 9, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'AEPA49', 'nombre' => 'Desarrollo del proyecto de investigación', 'plan_estudios' => 'Antiguo', 'semestre' => 9, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
            ];
            foreach ($adminAntiguo as $asig) {
                $asig['programa_id'] = $progAdmin->id;
                Asignatura::updateOrCreate(['codigo' => $asig['codigo']], $asig);
            }

            // Plan Nuevo
            $adminNuevo = [
                // Semestre 1
                ['codigo' => '11701111', 'nombre' => 'Procesos matemáticos', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11701513', 'nombre' => 'Ordenamiento jurídico constitucional e institucional', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11701225', 'nombre' => 'Principios de organización', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11701325', 'nombre' => 'Principios básicos de contabilidad', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11701632', 'nombre' => 'Herramientas pedagógicas y didácticas de la educación a distancia', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 2
                ['codigo' => '11702111', 'nombre' => 'Procesos probabilísticos', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11702531', 'nombre' => 'Bases jurídicas de la actividad empresarial', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11702225', 'nombre' => 'Planeación empresarial', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11702325', 'nombre' => 'Procedimientos contables en el manejo de activos', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11701421', 'nombre' => 'Agentes microeconómicos', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11702631', 'nombre' => 'Métodos y técnicas de investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 3
                ['codigo' => '11703111', 'nombre' => 'Álgebra y programación lineal', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11703225', 'nombre' => 'Organización empresarial', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11703325', 'nombre' => 'Procedimientos contables en el manejo de pasivos', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11702421', 'nombre' => 'Agentes macroeconómicos', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11703421', 'nombre' => 'Mercado de capitales', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11703532', 'nombre' => 'Inglés I', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11703631', 'nombre' => 'Comprensión de texto y lectura crítica', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 4
                ['codigo' => '11704225', 'nombre' => 'Dirección y control', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11704325', 'nombre' => 'Procedimientos contables de patrimonio y sociedades', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11704111', 'nombre' => 'Investigación de operaciones', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11704421', 'nombre' => 'Matemáticas financieras', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11704632', 'nombre' => 'Inglés II', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11704731', 'nombre' => 'Comprensión de texto y lectura crítica II', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 5
                ['codigo' => '11705625', 'nombre' => 'Creatividad y emprendimiento empresarial', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11705325', 'nombre' => 'Sistema de costos', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11705425', 'nombre' => 'Conocimientos básicos tributarios en la gerencia empresarial', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11705125', 'nombre' => 'Administración de la producción', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11704525', 'nombre' => 'Mercadeo', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11705532', 'nombre' => 'Inglés III', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11705731', 'nombre' => 'Razonamiento matemático', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 6
                ['codigo' => '11706225', 'nombre' => 'Salud y seguridad en el trabajo', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11706325', 'nombre' => 'El presupuesto como herramienta gerencial', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11706223', 'nombre' => 'Herramientas tecnológicas aplicadas a procesos administrativos', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11705525', 'nombre' => 'Mercadeo II', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11706532', 'nombre' => 'Inglés IV', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11707631', 'nombre' => 'Psicología organizacional', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 7
                ['codigo' => '11707225', 'nombre' => 'Gerencia de la calidad', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11707121', 'nombre' => 'Administración pública', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11707325', 'nombre' => 'Electiva I', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11707425', 'nombre' => 'Análisis financiero en el área administrativa', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11706125', 'nombre' => 'Administración del talento humano', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11707732', 'nombre' => 'Inglés V', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11706331', 'nombre' => 'Presaber específico', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 8
                ['codigo' => '11708225', 'nombre' => 'Electiva II', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11707525', 'nombre' => 'Formulación y evaluación de proyectos', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11708121', 'nombre' => 'Administración finca raíz', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11708325', 'nombre' => 'Normas de auditoría y conceptos de control', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '117078425', 'nombre' => 'Gerencia de riesgos', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11708533', 'nombre' => 'Proyecto de investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11708632', 'nombre' => 'Inglés VI', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11708631', 'nombre' => 'Leyes éticas y morales', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 9
                ['codigo' => '11709125', 'nombre' => 'Procesos gerenciales en la administración', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11709325', 'nombre' => 'Gerencia financiera', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11709223', 'nombre' => 'Práctica empresarial', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '11709433', 'nombre' => 'Desarrollo del proyecto de investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
            ];
            foreach ($adminNuevo as $asig) {
                $asig['programa_id'] = $progAdmin->id;
                Asignatura::updateOrCreate(['codigo' => $asig['codigo']], $asig);
            }
        }

        // ==========================================
        // 2. INGENIERÍA INFORMÁTICA (Código: 102883)
        // ==========================================
        $progInfo = Programa::where('codigo', '102883')->first();
        if ($progInfo) {
            // Plan Antiguo
            $infoAntiguo = [
                // Semestre 1
                ['codigo' => 'IIPA01', 'nombre' => 'Conceptos y métodos matemáticos', 'plan_estudios' => 'Antiguo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA02', 'nombre' => 'Elementos básicos de programación', 'plan_estudios' => 'Antiguo', 'semestre' => 1, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA03', 'nombre' => 'Teorías de la ingeniería informática', 'plan_estudios' => 'Antiguo', 'semestre' => 1, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA04', 'nombre' => 'Normas de participación ciudadana e institucional', 'plan_estudios' => 'Antiguo', 'semestre' => 1, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA05', 'nombre' => 'Herramientas y técnicas de estudio - Educación a distancia', 'plan_estudios' => 'Antiguo', 'semestre' => 1, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 2
                ['codigo' => 'IIPA06', 'nombre' => 'Métodos del cálculo diferencial e integral', 'plan_estudios' => 'Antiguo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA07', 'nombre' => 'Postulados y principios de la física mecánica', 'plan_estudios' => 'Antiguo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA08', 'nombre' => 'Lenguaje de programación funcional', 'plan_estudios' => 'Antiguo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA09', 'nombre' => 'Interacción de objetos por medio de programación', 'plan_estudios' => 'Antiguo', 'semestre' => 2, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA10', 'nombre' => 'Desarrollo de competencia comunicativa en segunda lengua A1 básico principiante', 'plan_estudios' => 'Antiguo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 3
                ['codigo' => 'IIPA11', 'nombre' => 'Teoremas y postulados matemáticos', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA12', 'nombre' => 'Diseño de circuito electrónico digital', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA13', 'nombre' => 'Estructuras de datos de la formación', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA14', 'nombre' => 'Aplicaciones en entorno gráfico con programación orientada a objetos', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA15', 'nombre' => 'Teoría del conocimiento', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA16', 'nombre' => 'Competencia comunicativa en segunda lengua A2 básico principiante', 'plan_estudios' => 'Antiguo', 'semestre' => 3, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 4
                ['codigo' => 'IIPA17', 'nombre' => 'Razonamiento matemático en vectores y matrices', 'plan_estudios' => 'Antiguo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA18', 'nombre' => 'Estructuras de datos no lineales', 'plan_estudios' => 'Antiguo', 'semestre' => 4, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA19', 'nombre' => 'Herramientas informáticas orientada a eventos', 'plan_estudios' => 'Antiguo', 'semestre' => 4, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA20', 'nombre' => 'Criterios para la selección de hardware', 'plan_estudios' => 'Antiguo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA21', 'nombre' => 'Competencia comunicativa en segunda lengua A1 básico intermedio', 'plan_estudios' => 'Antiguo', 'semestre' => 4, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 5
                ['codigo' => 'IIPA22', 'nombre' => 'Procesos estadísticos y probabilísticos', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA23', 'nombre' => 'Métodos de cálculo vectorial en la computación gráfica', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA24', 'nombre' => 'Representación de información en bases de datos', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA25', 'nombre' => 'Técnicas del diseño hipermedia en la informática', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA26', 'nombre' => 'Conceptos básicos de la comunicación electrónica', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA27', 'nombre' => 'Creatividad empresarial y plan de negocios', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA28', 'nombre' => 'Competencia comunicativa en segunda lengua A2 básico intermedio', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA29', 'nombre' => 'Métodos y técnicas de investigación', 'plan_estudios' => 'Antiguo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 6
                ['codigo' => 'IIPA30', 'nombre' => 'Modelos matemáticos y algoritmos', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA31', 'nombre' => 'Aplicaciones orientadas a la web', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA32', 'nombre' => 'Procesos involucrados en el modelado de software', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA33', 'nombre' => 'Diseño e implementación de redes de datos', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA34', 'nombre' => 'Formulación y evaluación de proyectos', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA35', 'nombre' => 'Competencia comunicativa en segunda lengua B1 intermedio principiante', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA36', 'nombre' => 'Seminario de grado I', 'plan_estudios' => 'Antiguo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 7
                ['codigo' => 'IIPA37', 'nombre' => 'Métodos matemáticos aplicados en simulación', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA38', 'nombre' => 'Algoritmos lógicos en el desarrollo de software', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA39', 'nombre' => 'Técnicas para el desarrollo de software', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA40', 'nombre' => 'Arquitectura de sistemas operativos', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA41', 'nombre' => 'Gerencia de proyectos informáticos', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA42', 'nombre' => 'Competencia comunicativa en segunda lengua B2 intermedio', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA43', 'nombre' => 'Seminario de grado II', 'plan_estudios' => 'Antiguo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 8
                ['codigo' => 'IIPA44', 'nombre' => 'Elementos gráficos de comunicación visual', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA45', 'nombre' => 'Modelos de arquitecturas en software distribuido', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA46', 'nombre' => 'Tecnologías informáticas para el comercio electrónico', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA47', 'nombre' => 'Técnicas para el diseño de aplicaciones telemáticas', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA48', 'nombre' => 'Principios y normas del derecho informático', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA49', 'nombre' => 'Proyecto de investigación', 'plan_estudios' => 'Antiguo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 9
                ['codigo' => 'IIPA50', 'nombre' => 'Electiva', 'plan_estudios' => 'Antiguo', 'semestre' => 9, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA51', 'nombre' => 'Implementación de sistemas de telemetría', 'plan_estudios' => 'Antiguo', 'semestre' => 9, 'creditos' => 4, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA52', 'nombre' => 'Técnicas y herramientas de seguridad informática', 'plan_estudios' => 'Antiguo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA53', 'nombre' => 'Auditorías de sistemas', 'plan_estudios' => 'Antiguo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA54', 'nombre' => 'Práctica profesional', 'plan_estudios' => 'Antiguo', 'semestre' => 9, 'creditos' => 3, 'tipo' => 'Práctico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA55', 'nombre' => 'Leyes éticas y morales', 'plan_estudios' => 'Antiguo', 'semestre' => 9, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'IIPA56', 'nombre' => 'Desarrollo del proyecto de investigación', 'plan_estudios' => 'Antiguo', 'semestre' => 9, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
            ];
            foreach ($infoAntiguo as $asig) {
                $asig['programa_id'] = $progInfo->id;
                Asignatura::updateOrCreate(['codigo' => $asig['codigo']], $asig);
            }

            // Plan Nuevo
            $infoNuevo = [
                // Semestre 1
                ['codigo' => '131601111', 'nombre' => 'Conceptos y Métodos Matemáticos', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131601223', 'nombre' => 'Fundamentos de Programación', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131601321', 'nombre' => 'Teorías de la ingeniería informática', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '1316011425', 'nombre' => 'Sistemas Operativos I', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131601511', 'nombre' => 'Responsabilidad Ciudadana e Identidad Institucional', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131601611', 'nombre' => 'Herramientas y Técnicas de Estudio - Educación a Distancia / Investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 2
                ['codigo' => '131602111', 'nombre' => 'Lógica Booleana', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131602211', 'nombre' => 'Cálculo Diferencial', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131602311', 'nombre' => 'Electromagnetismo', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131602423', 'nombre' => 'Programación I', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131602623', 'nombre' => 'Sistemas Operativos II', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131602711', 'nombre' => 'Taller de Comunicación Oral y Escrita', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131602815', 'nombre' => 'Inglés A11', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 3
                ['codigo' => '131603111', 'nombre' => 'Álgebra Lineal', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131603211', 'nombre' => 'Cálculo Integral', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131603314', 'nombre' => 'Electrónica Analógica', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131603423', 'nombre' => 'Programación I (POO II)', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131603523', 'nombre' => 'Estructuras de Datos I', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131603611', 'nombre' => 'Gestión Estratégica y Empresarial', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131603715', 'nombre' => 'Inglés A12', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131603811', 'nombre' => 'Epistemología de la Investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 4
                ['codigo' => '131604111', 'nombre' => 'Cálculo Multivariable', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131604214', 'nombre' => 'Electrónica Digital', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131604323', 'nombre' => 'Programación III (POO II)', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131604423', 'nombre' => 'Estructura de Datos II', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131604511', 'nombre' => 'Creatividad e Innovación Empresarial', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131604611', 'nombre' => 'Seminario de Desarrollo Humano I: Habilidades Humanas', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131604715', 'nombre' => 'Inglés A21', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131604811', 'nombre' => 'Metodología de la Investigación Pura y aplicada', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 5
                ['codigo' => '131605111', 'nombre' => 'Probabilidad y Estadística', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131605223', 'nombre' => 'Programación Móvil y Sistemas Embebidos', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131605323', 'nombre' => 'Bases de datos I', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131605424', 'nombre' => 'Comunicación Electrónica', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131605523', 'nombre' => 'Electiva I', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131605611', 'nombre' => 'Emprendimiento y Plan de Negocios', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131605711', 'nombre' => 'Seminario de Desarrollo Humano II: Habilidades Cognitivas', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131605815', 'nombre' => 'Inglés A22', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 6
                ['codigo' => '131606111', 'nombre' => 'Investigación de Operaciones', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131606225', 'nombre' => 'Big Data', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131606323', 'nombre' => 'Bases de Datos II', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131606423', 'nombre' => 'Redes de Datos', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131606523', 'nombre' => 'Electiva II', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131606611', 'nombre' => 'Formulación y Evaluación de Proyectos', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131606711', 'nombre' => 'Seminario de Desarrollo Humano III: Habilidades Sociales', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131606815', 'nombre' => 'Inglés B11', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131606925', 'nombre' => 'Seminario de Grado (Propuesta)', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 7
                ['codigo' => '131607111', 'nombre' => 'Simulación Digital', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131607225', 'nombre' => 'Inteligencia Computacional I', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131607323', 'nombre' => 'Programación Web (Front End)', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131607423', 'nombre' => 'Ingeniería de Software I', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131607523', 'nombre' => 'Telemática', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131607623', 'nombre' => 'Hacking I', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131607715', 'nombre' => 'Inglés B12', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131607825', 'nombre' => 'Seminario de Grado II: (Anteproyecto)', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 8
                ['codigo' => '131608123', 'nombre' => 'Inteligencia Computacional II', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131608223', 'nombre' => 'Programación Web (Back End)', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131608323', 'nombre' => 'Sistemas Distribuidos', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131608423', 'nombre' => 'Sistemas de Telemetría', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131608525', 'nombre' => 'Sistemas de Gestión de Seguridad de la Información', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131608611', 'nombre' => 'Gestión de Proyectos Tecnológicos', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131608723', 'nombre' => 'Desarrollo de Trabajo de Grado I', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 9
                ['codigo' => '131609123', 'nombre' => 'Electiva III', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131609223', 'nombre' => 'Práctica Profesional', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131609311', 'nombre' => 'Leyes Éticas y Morales', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131609411', 'nombre' => 'Principios y Normas del Derecho Informático', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '131609523', 'nombre' => 'Desarrollo de Trabajo de Grado II', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
            ];
            foreach ($infoNuevo as $asig) {
                $asig['programa_id'] = $progInfo->id;
                Asignatura::updateOrCreate(['codigo' => $asig['codigo']], $asig);
            }
        }

        // ==========================================
        // 3. CONTADURÍA PÚBLICA (Código: 102322)
        // ==========================================
        $progConta = Programa::where('codigo', '102322')->first();
        if ($progConta) {
            $contaNuevo = [
                // Semestre 1
                ['codigo' => '11601111', 'nombre' => 'Procedimientos matemáticos', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11601211', 'nombre' => 'Ordenamiento jurídico constitucional e institucional', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11601521', 'nombre' => 'Agentes microeconómicos', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11601325', 'nombre' => 'Principios básicos de contabilidad financiera', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11601425', 'nombre' => 'Administración, entorno y alcances', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11601631', 'nombre' => 'Herramientas pedagógicas y didácticas de la educación a distancia', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 2
                ['codigo' => '11602111', 'nombre' => 'Procesos estadísticos y probabilísticos', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11602211', 'nombre' => 'Bases jurídicas de la actividad empresarial', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11602521', 'nombre' => 'Agentes macroeconómicos', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11602325', 'nombre' => 'Procedimientos contables en el manejo de activos', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11602425', 'nombre' => 'Bases fundamentales de la planeación', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11602631', 'nombre' => 'Métodos y técnicas de investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 3
                ['codigo' => '11603211', 'nombre' => 'Normatividad laboral', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11603525', 'nombre' => 'Comportamiento monetario mundial y nacional', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11603325', 'nombre' => 'Procedimientos contables en el manejo de pasivos', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11603125', 'nombre' => 'Herramientas financieras', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11603425', 'nombre' => 'Técnicas de organización empresarial', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11603635', 'nombre' => 'Inglés I', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11603731', 'nombre' => 'Comprensión de texto y lectura crítica', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 4
                ['codigo' => '11604111', 'nombre' => 'Normatividad sobre contratación estatal', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11604525', 'nombre' => 'Mercados', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11604225', 'nombre' => 'Procedimientos contables de patrimonio y sociedades', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11604325', 'nombre' => 'Gestión financiera', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11604425', 'nombre' => 'Procesos de dirección', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11604635', 'nombre' => 'Inglés II', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11604731', 'nombre' => 'Comprensión de texto y lectura crítica II', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 5
                ['codigo' => '11605535', 'nombre' => 'Componentes de la formulación de proyectos', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11605125', 'nombre' => 'Informes financieros y matrices y subsidiarias', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11605225', 'nombre' => 'Registro de operaciones comerciales del ciclo contable', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11605325', 'nombre' => 'Análisis financiero en el área contable', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11605421', 'nombre' => 'Creatividad empresarial y plan de negocios', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11605635', 'nombre' => 'Inglés III', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11605731', 'nombre' => 'Razonamiento matemático', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 6
                ['codigo' => '11606125', 'nombre' => 'Elementos del costo por órdenes de producción', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11606223', 'nombre' => 'Herramientas tecnológicas aplicadas a los sistemas contables', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11606725', 'nombre' => 'Normatividad tributaria sobre IVA y retención en la fuente', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11606325', 'nombre' => 'El presupuesto como herramienta gerencial', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11606635', 'nombre' => 'Inglés IV', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11606531', 'nombre' => 'Psicología empresarial', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 7
                ['codigo' => '11606425', 'nombre' => 'Electiva I', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11607225', 'nombre' => 'Elementos del costo por procesos y estándar', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11607323', 'nombre' => 'Paquetes contables', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11607425', 'nombre' => 'Normatividad tributaria sobre impuesto de renta y complementarios', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11607525', 'nombre' => 'Normas de auditoría y aseguramiento', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11607625', 'nombre' => 'Técnicas de control', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11607735', 'nombre' => 'Inglés V', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 8
                ['codigo' => '11608125', 'nombre' => 'Procedimientos contables del sector público', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11608223', 'nombre' => 'Práctica profesional', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11608325', 'nombre' => 'Procedimientos tributarios', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11608425', 'nombre' => 'Auditoría a los estados financieros', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11608535', 'nombre' => 'Inglés VI', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11608633', 'nombre' => 'Proyecto de investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11608731', 'nombre' => 'Presaber específico', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 9
                ['codigo' => '11607111', 'nombre' => 'Comercio y normatividad internacional', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11609125', 'nombre' => 'Procedimientos de registros en diversos tipos de contabilidad', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11609325', 'nombre' => 'Desarrollo sostenible aplicado al área contable', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11609425', 'nombre' => 'Procesos de revisoría fiscal', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11608525', 'nombre' => 'Electiva II', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11609533', 'nombre' => 'Desarrollo del proyecto de investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '11609631', 'nombre' => 'Leyes éticas y morales', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
            ];
            foreach ($contaNuevo as $asig) {
                $asig['programa_id'] = $progConta->id;
                Asignatura::updateOrCreate(['codigo' => $asig['codigo']], $asig);
            }
        }

        // ==========================================
        // 4. TECNOLOGÍA EN GESTIÓN DE LA SEGURIDAD Y SALUD EN EL TRABAJO (Código: 110609)
        // ==========================================
        $progTgsst = Programa::where('codigo', '110609')->first();
        if ($progTgsst) {
            $tgsstNuevo = [
                // Semestre 1
                ['codigo' => 'TGSST01', 'nombre' => 'Introducción a la gestión en la seguridad y salud en el trabajo', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST02', 'nombre' => 'Principios básicos de química', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST03', 'nombre' => 'Procedimientos matemáticos', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST04', 'nombre' => 'Gestión del talento Humano', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST05', 'nombre' => 'Ética Profesional', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST06', 'nombre' => 'Constitución y legislación en SST', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST07', 'nombre' => 'Herramientas pedagógicas para aulas virtuales', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST08', 'nombre' => 'Idiomas I', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 2
                ['codigo' => 'TGSST09', 'nombre' => 'Fundamentos de Bioquímica', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST10', 'nombre' => 'Toxicológia ocupacional', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST11', 'nombre' => 'Peligros físicos', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST12', 'nombre' => 'Peligros Biológicos', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST13', 'nombre' => 'Principios de anatomía', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST14', 'nombre' => 'Procesos estadísticos y probabilísticos', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST15', 'nombre' => 'Informática aplicada a la SST', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST16', 'nombre' => 'Idiomas II', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 3
                ['codigo' => 'TGSST17', 'nombre' => 'Vigilancia epidemiológica ocupacional', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST18', 'nombre' => 'Saneamiento ambiental básico', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST19', 'nombre' => 'Peligro psicosocial', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST20', 'nombre' => 'Peligro biomecánico', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST21', 'nombre' => 'Condición de Seguridad Mecánicos', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST22', 'nombre' => 'Condición de Seguridad Construcción', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST23', 'nombre' => 'Seminario primer respondiente', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST24', 'nombre' => 'Metodología de la Investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST25', 'nombre' => 'Idiomas III', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 4
                ['codigo' => 'TGSST26', 'nombre' => 'Condiciones de higiene industrial - Fundamentos', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST27', 'nombre' => 'Condiciones de seguridad industrial', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST28', 'nombre' => 'Prevención en áreas de alto riesgo', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST29', 'nombre' => 'Prevención sistema comando de incidentes', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST30', 'nombre' => 'Formulación de Proyectos', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST31', 'nombre' => 'Electiva I', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST32', 'nombre' => 'Sistema de Gestión de calidad ISO 90001', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST33', 'nombre' => 'Idiomas IV', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 5
                ['codigo' => 'TGSST34', 'nombre' => 'Gestión de la salud en el trabajo', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST35', 'nombre' => 'Riesgos en la industria minera y petrolera', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST36', 'nombre' => 'Técnicas de prescripción física', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST37', 'nombre' => 'Plan de prevención, preparación y respuesta ante emergencias', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST38', 'nombre' => 'Seminario de riesgos en espacios confinados', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST39', 'nombre' => 'Seminario de investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST40', 'nombre' => 'Electiva II (Sistema de gestión ambiental ISO 14001)', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST41', 'nombre' => 'Sistema de gestión ambiental en ISO140001', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST42', 'nombre' => 'Idiomas V', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 6
                ['codigo' => 'TGSST43', 'nombre' => 'Control total de pérdidas', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST44', 'nombre' => 'Seminario de rescate vertical', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST45', 'nombre' => 'Diseño del SG SST', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST46', 'nombre' => 'Administración', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 4, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST47', 'nombre' => 'Proyecto de investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST48', 'nombre' => 'Electiva III TGSST', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST49', 'nombre' => 'Sistema de gestión SST ISO 45001', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'TGSST50', 'nombre' => 'Idiomas VI', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'ActivoCódigo:'],
            ];
            foreach ($tgsstNuevo as $asig) {
                $asig['programa_id'] = $progTgsst->id;
                Asignatura::updateOrCreate(['codigo' => $asig['codigo']], $asig);
            }
        }

        // ==========================================
        // 5. TECNOLOGÍA EN DECORACIÓN DE INTERIORES (Código: 110106)
        // ==========================================
        $progTdi = Programa::where('codigo', '110106')->first();
        if ($progTdi) {
            $tdiNuevo = [
                // Semestre 1
                ['codigo' => '1060101', 'nombre' => 'Interiorismo I (Fundamentos de decoración)', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060104', 'nombre' => 'Historia del arte y la decoración', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '1060105', 'nombre' => 'Fundamentos de obra y restauración', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060106', 'nombre' => 'Geometría aplicada a la decoración', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060102', 'nombre' => 'Dibujo artístico y bocetos', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060103', 'nombre' => 'Cultura, diseño y decoración', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060108', 'nombre' => 'Deporte formativo', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 1, 'tipo' => 'Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060107', 'nombre' => 'Técnicas de estudio', 'plan_estudios' => 'Nuevo', 'semestre' => 1, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 2
                ['codigo' => '1060201', 'nombre' => 'Interiorismo II (Principios de composición en la decoración)', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060203', 'nombre' => 'Estilos', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060204', 'nombre' => 'Dibujo y expresión artística', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060205', 'nombre' => 'Dibujo técnico', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060202', 'nombre' => 'Taller I (Vivienda y comunicación)', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 3, 'tipo' => 'Práctico', 'estado' => 'Activo'],
                ['codigo' => '10602631', 'nombre' => 'Metodología de la investigación', 'plan_estudios' => 'Nuevo', 'semestre' => 2, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                // Semestre 3
                ['codigo' => '1060301', 'nombre' => 'Interiorismo III (Espacios comerciales)', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060303', 'nombre' => 'Maquetas', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060304', 'nombre' => 'Tecnología de los materiales I', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060302', 'nombre' => 'Taller II (Arte decorativo y espacios comerciales)', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 3, 'tipo' => 'Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060305', 'nombre' => 'Informática I', 'plan_estudios' => 'Nuevo', 'semestre' => 3, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 4
                ['codigo' => '1060401', 'nombre' => 'Interiorismo IV (Espacios gastronómicos)', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060403', 'nombre' => 'Tecnología I (Técnicas constructivas)', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060404', 'nombre' => 'Tecnología de los materiales II', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '1060402', 'nombre' => 'Taller III (Muebles y espacios gastronómicos)', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060406', 'nombre' => 'Informática II', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060405', 'nombre' => 'Costos', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060408', 'nombre' => 'Inglés I', 'plan_estudios' => 'Nuevo', 'semestre' => 4, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 5
                ['codigo' => '1060501', 'nombre' => 'Interiorismo V (Stand y exposiciones)', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060503', 'nombre' => 'Tecnología II (Iluminación)', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060502', 'nombre' => 'Taller IV (Arte decorativo)', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060504', 'nombre' => 'Electiva I', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060506', 'nombre' => 'Informática III', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060505', 'nombre' => 'Presupuestos', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060507', 'nombre' => 'Inglés II', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060508', 'nombre' => 'Seminario de grado', 'plan_estudios' => 'Nuevo', 'semestre' => 5, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 6
                ['codigo' => '1060601', 'nombre' => 'Interiorismo VI (Hoteles)', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060603', 'nombre' => 'Tecnología III (Instalaciones)', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060606', 'nombre' => 'Arquitectura sostenible', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060602', 'nombre' => 'Taller V (Muebles y accesorios hoteles)', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060604', 'nombre' => 'Electiva II', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060607', 'nombre' => 'Ética', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => '1060605', 'nombre' => 'Formulación y evaluación de proyectos', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => '1060608', 'nombre' => 'Inglés III', 'plan_estudios' => 'Nuevo', 'semestre' => 6, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
            ];
            foreach ($tdiNuevo as $asig) {
                $asig['programa_id'] = $progTdi->id;
                Asignatura::updateOrCreate(['codigo' => $asig['codigo']], $asig);
            }
        }

        // ==========================================
        // 6. PROFESIONAL EN SEGURIDAD Y SALUD EN EL TRABAJO (Código: 104600)
        // ==========================================
        $progPsst = Programa::where('codigo', '104600')->first();
        if ($progPsst) {
            $psstNuevo = [
                // Semestre 7
                ['codigo' => 'PSST48', 'nombre' => 'Rehabilitación y Reintegro Laboral', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST49', 'nombre' => 'Riesgos en la Agroindustria', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST50', 'nombre' => 'Prevención en Actividades Críticas', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 3, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST78', 'nombre' => 'Electiva II calidad en el sector publico y auditoria', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST53', 'nombre' => 'Seminario de Grado', 'plan_estudios' => 'Nuevo', 'semestre' => 7, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 8
                ['codigo' => 'PSST56', 'nombre' => 'Sistema de Gestión de la Seguridad y Salud en el Trabajo: Norma ISO', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST57', 'nombre' => 'Gestión del Riesgo de Desastres', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST58', 'nombre' => 'Riesgos en la Industria Minera y de Construcción', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST59', 'nombre' => 'Riesgos en la Industria Petrolera', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST60', 'nombre' => 'Riesgos en la Industria Alimenticia', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST51', 'nombre' => 'Administración de Riesgos II', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST61', 'nombre' => 'Electiva III Gestión del Riesgo', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST62', 'nombre' => 'Control de perdidas', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST64', 'nombre' => 'Lengua Extranjera Nivel Específico I', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST65', 'nombre' => 'Rescate Vertical', 'plan_estudios' => 'Nuevo', 'semestre' => 8, 'creditos' => 1, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                // Semestre 9
                ['codigo' => 'PSST66', 'nombre' => 'Investigación de Operaciones', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico', 'estado' => 'Activo'],
                ['codigo' => 'PSST67', 'nombre' => 'Práctica Profesional', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 6, 'tipo' => 'Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST68', 'nombre' => 'Electiva IV: Sistemas de Gestión', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST69', 'nombre' => 'Demolición de Estructuras', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST70', 'nombre' => 'Lengua Extranjera Nivel Específico II', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 2, 'tipo' => 'Teórico-Práctico', 'estado' => 'Activo'],
                ['codigo' => 'PSST71', 'nombre' => 'Trabajo de Grado', 'plan_estudios' => 'Nuevo', 'semestre' => 9, 'creditos' => 1, 'tipo' => 'Teórico', 'estado' => 'Activo'],
            ];
            foreach ($psstNuevo as $asig) {
                $asig['programa_id'] = $progPsst->id;
                Asignatura::updateOrCreate(['codigo' => $asig['codigo']], $asig);
            }
        }
    }
}
=======
        $asignaturas = [
            // 1. PROFESIONAL EN ADMINISTRACIÓN DE EMPRESAS
            ['codigo' => '11701111', 'nombre' => 'Procesos Matemáticos'],
            ['codigo' => '11701513', 'nombre' => 'Cronograma Jurídico Constitucional Institucional'],
            ['codigo' => '11701225', 'nombre' => 'Principios de Organización'],
            ['codigo' => '11701325', 'nombre' => 'Principios Básicos de Contabilidad'],
            ['codigo' => '11701632', 'nombre' => 'Herramientas Didácticas y Didácticas de la Educación a Distancia'],
            ['codigo' => '11702111', 'nombre' => 'Procesos Estadísticos y Probabilísticos'],
            ['codigo' => '11702225', 'nombre' => 'Planeación Empresarial'],
            ['codigo' => '11702325', 'nombre' => 'Procedimientos Contables en el Manejo de Activos'],
            ['codigo' => '11701421', 'nombre' => 'Agentes Microeconómicos'],
            ['codigo' => '11702631', 'nombre' => 'Ética y Técnicas de Investigación'],
            ['codigo' => '11703111', 'nombre' => 'Árgebra y Programación Lineal'],
            ['codigo' => '11702531', 'nombre' => 'Bases Jurídicas de la Actividad Empresarial'],
            ['codigo' => '11703225', 'nombre' => 'Organización Empresarial'],
            ['codigo' => '11703325', 'nombre' => 'Procedimientos Contables en el Manejo de Pasivos'],
            ['codigo' => '11702421', 'nombre' => 'Agentes Macroeconómicos'],
            ['codigo' => '11703532', 'nombre' => 'Inglés I'],
            ['codigo' => '11703631', 'nombre' => 'Comprensión de Texto y Lectura Crítica'],
            ['codigo' => '11704111', 'nombre' => 'Investigación de Operaciones'],
            ['codigo' => '11704225', 'nombre' => 'Dirección y Control'],
            ['codigo' => '11704325', 'nombre' => 'Procedimientos Contables de Patrimonio y Sociedades'],
            ['codigo' => '11703421', 'nombre' => 'Mercado de Capitales'],
            ['codigo' => '11704632', 'nombre' => 'Inglés II'],
            ['codigo' => '11704731', 'nombre' => 'Comprensión de Texto y Lectura Crítica (Admón)'],
            ['codigo' => '11705625', 'nombre' => 'Creatividad y Emprendimiento Empresarial'],
            ['codigo' => '11705125', 'nombre' => 'Administración de la Producción'],
            ['codigo' => '11705325', 'nombre' => 'Sistema de Costos'],
            ['codigo' => '11705425', 'nombre' => 'Conocimientos Básicos Tributarios en la Gerencia Empresarial'],
            ['codigo' => '11705632', 'nombre' => 'Inglés III'],
            ['codigo' => '11705731', 'nombre' => 'Razonamiento Matemático'],
            ['codigo' => '11706225', 'nombre' => 'Salud y Seguridad en el Trabajo'],
            ['codigo' => '11706325', 'nombre' => 'El Presupuesto como Herramienta Gerencial'],
            ['codigo' => '11704421', 'nombre' => 'Matemáticas Financieras'],
            ['codigo' => '11706223', 'nombre' => 'Herramientas Tecnológicas Aplicadas a Procesos Administrativos'],
            ['codigo' => '11705332', 'nombre' => 'Inglés IV'],
            ['codigo' => '11707631', 'nombre' => 'Psicología Organizacional'],
            ['codigo' => '11706331', 'nombre' => 'Presaber Específico'],
            ['codigo' => '11707225', 'nombre' => 'Gerencia de la Calidad'],
            ['codigo' => '11707121', 'nombre' => 'Administración Pública'],
            ['codigo' => '11707325', 'nombre' => 'Electiva'],
            ['codigo' => '11707425', 'nombre' => 'Análisis Financiero en el Área Administrativa'],
            ['codigo' => '11707732', 'nombre' => 'Inglés V'],
            ['codigo' => '11706125', 'nombre' => 'Administración del Talento Humano'],
            ['codigo' => '11708225', 'nombre' => 'Electiva II'],
            ['codigo' => '11707525', 'nombre' => 'Formulación y Evaluación de Proyectos'],
            ['codigo' => '11708121', 'nombre' => 'Administración Finca Raíz'],
            ['codigo' => '11708325', 'nombre' => 'Normas de Auditoría y Conceptos de Control'],
            ['codigo' => '11708533', 'nombre' => 'Proyecto de Investigación'],
            ['codigo' => '11708632', 'nombre' => 'Inglés VI'],
            ['codigo' => '11709125', 'nombre' => 'Procesos Gerenciales en la Administración'],
            ['codigo' => '11709325', 'nombre' => 'Gerencia Financiera'],
            ['codigo' => '11709223', 'nombre' => 'Práctica Empresarial'],
            ['codigo' => '11709433', 'nombre' => 'Desarrollo del Proyecto de Investigación'],
            ['codigo' => '11708631', 'nombre' => 'Leyes Éticas y Morales'],

            // 2. PROFESIONAL EN DISEÑO VISUAL (Códigos inventados provisionales)
            ['codigo' => 'DV-01', 'nombre' => 'Diseño Básico I'],
            ['codigo' => 'DV-02', 'nombre' => 'Expresión I'],
            ['codigo' => 'DV-03', 'nombre' => 'Idiomas I'],
            ['codigo' => 'DV-04', 'nombre' => 'Diseño Digital I'],
            ['codigo' => 'DV-05', 'nombre' => 'Historia del Diseño I'],
            ['codigo' => 'DV-06', 'nombre' => 'Técnicas de Estudio (Diseño)'],
            ['codigo' => 'DV-07', 'nombre' => 'Constitución y Cátedra para la Paz'],
            ['codigo' => 'DV-08', 'nombre' => 'Diseño Básico II'],
            ['codigo' => 'DV-09', 'nombre' => 'Expresión II'],
            ['codigo' => 'DV-10', 'nombre' => 'Comunicación Oral y Escrita'],
            ['codigo' => 'DV-11', 'nombre' => 'Idiomas II'],
            ['codigo' => 'DV-12', 'nombre' => 'Diseño Digital II'],
            ['codigo' => 'DV-13', 'nombre' => 'Historia del Diseño II'],
            ['codigo' => 'DV-14', 'nombre' => 'Ética (Diseño)'],
            ['codigo' => 'DV-15', 'nombre' => 'Diseño Básico III'],
            ['codigo' => 'DV-16', 'nombre' => 'Expresión III'],
            ['codigo' => 'DV-17', 'nombre' => 'Idiomas III'],
            ['codigo' => 'DV-18', 'nombre' => 'Diseño Digital III'],
            ['codigo' => 'DV-19', 'nombre' => 'Tipografía'],
            ['codigo' => 'DV-20', 'nombre' => 'Fundamentos Filosóficos del Diseño'],
            ['codigo' => 'DV-21', 'nombre' => 'Costos y Presupuestos (Diseño)'],
            ['codigo' => 'DV-22', 'nombre' => 'Proyecto de Diseño I'],
            ['codigo' => 'DV-23', 'nombre' => 'Taller de Diseño Editorial'],
            ['codigo' => 'DV-24', 'nombre' => 'Comunicación Visual'],
            ['codigo' => 'DV-25', 'nombre' => 'Idiomas IV'],
            ['codigo' => 'DV-26', 'nombre' => 'Diseño Digital IV'],
            ['codigo' => 'DV-27', 'nombre' => 'Fotografía I'],
            ['codigo' => 'DV-28', 'nombre' => 'Diseño de la Información Visual'],
            ['codigo' => 'DV-29', 'nombre' => 'Metodología de la Investigación (Diseño)'],
            ['codigo' => 'DV-30', 'nombre' => 'Procesos Gráficos'],
            ['codigo' => 'DV-31', 'nombre' => 'Proyecto de Diseño II'],
            ['codigo' => 'DV-32', 'nombre' => 'Taller de Imagen Corporativa'],
            ['codigo' => 'DV-33', 'nombre' => 'Imagen en Movimiento'],
            ['codigo' => 'DV-34', 'nombre' => 'Idiomas V'],
            ['codigo' => 'DV-35', 'nombre' => 'Diseño Digital V'],
            ['codigo' => 'DV-36', 'nombre' => 'Fotografía II'],
            ['codigo' => 'DV-37', 'nombre' => 'Electiva I (Diseño)'],
            ['codigo' => 'DV-38', 'nombre' => 'Proyecto de Diseño III'],
            ['codigo' => 'DV-39', 'nombre' => 'Taller de Programa Señalético'],
            ['codigo' => 'DV-40', 'nombre' => 'Seminario de Grado I'],
            ['codigo' => 'DIS-VIS-COM', 'nombre' => 'Comunicación Publicitaria'],
            ['codigo' => 'DV-42', 'nombre' => 'Idiomas VI'],
            ['codigo' => 'DV-43', 'nombre' => 'Diseño Digital VI'],
            ['codigo' => 'DV-44', 'nombre' => 'Creatividad Publicitaria y Medios'],
            ['codigo' => 'DV-45', 'nombre' => 'Electiva II (Diseño)'],
            ['codigo' => 'DIS-VIS-EL4', 'nombre' => 'Electiva IV (Diseño)'],
            ['codigo' => 'DV-47', 'nombre' => 'Proyecto de Diseño IV'],
            ['codigo' => 'DV-48', 'nombre' => 'Seminario de Grado II'],
            ['codigo' => 'DV-49', 'nombre' => 'Electiva III (Diseño)'],
            ['codigo' => 'DIS-VIS-EL5', 'nombre' => 'Electiva V (Diseño)'],
            ['codigo' => 'DIS-VIS-EL6', 'nombre' => 'Electiva VI (Diseño)'],
            ['codigo' => 'DV-52', 'nombre' => 'Práctica Empresarial (Diseño)'],
            ['codigo' => 'DV-53', 'nombre' => 'Formulación y Evaluación de Proyectos (Diseño)'],
            ['codigo' => 'DV-54', 'nombre' => 'Habilidades Gerenciales I'],
            ['codigo' => 'DV-55', 'nombre' => 'Proyecto de Diseño V'],
            ['codigo' => 'DV-56', 'nombre' => 'Desarrollo del Proyecto de Grado'],
            ['codigo' => 'DIS-VIS-HG2', 'nombre' => 'Habilidades Gerenciales II'],

            // 3. PROFESIONAL EN SEGURIDAD Y SALUD EN EL TRABAJO (SST)
            ['codigo' => 'GPS-RAP5', 'nombre' => 'Matemática Aplicada'],
            ['codigo' => 'CR1-RAP1', 'nombre' => 'Química Aplicada'],
            ['codigo' => 'CPS-RAP3', 'nombre' => 'Fundamentos de Anatomía'],
            ['codigo' => 'CPS-RAP5', 'nombre' => 'Introducción a la Gestión de Riesgos Laborales'],
            ['codigo' => 'CPS-RAP5-LEG', 'nombre' => 'Legislación en Riesgos Laborales y Ambientales'],
            ['codigo' => 'CP1-RAP1', 'nombre' => 'Ética Profesional'],
            ['codigo' => 'CF4-RAF4', 'nombre' => 'Constitución y Cátedra de la Paz'],
            ['codigo' => 'CF4-RAP5', 'nombre' => 'Lengua Extranjera Nivel Básico I'],
            ['codigo' => 'CP3-RAP3', 'nombre' => 'Técnicas de Estudio (SST)'],
            ['codigo' => 'CPE-RAPE', 'nombre' => 'Estadística Descriptiva'],
            ['codigo' => 'SST-BIO-01', 'nombre' => 'Bioquímica'],
            ['codigo' => 'SST-FIS-01', 'nombre' => 'Fundamentos de Fisiología'],
            ['codigo' => 'SST-FAP-01', 'nombre' => 'Física Aplicada'],
            ['codigo' => 'SST-PBIO-01', 'nombre' => 'Peligros y Riesgos Biológicos'],
            ['codigo' => 'SST-PSIC-01', 'nombre' => 'Peligros y Riesgos Psicosociales'],
            ['codigo' => 'SST-BIOM-01', 'nombre' => 'Peligros y Riesgos Biomecánicos'],
            ['codigo' => 'CPE-RAPE-COM', 'nombre' => 'Técnicas y Comunicación Asertiva'],
            ['codigo' => 'CF4-BAE', 'nombre' => 'Lengua Extranjera Nivel Básico II'],
            ['codigo' => 'CPE-RAP7', 'nombre' => 'Bioestadística'],
            ['codigo' => 'CP2-RAP2', 'nombre' => 'Peligro Químico y Riesgos con Materiales Peligrosos'],
            ['codigo' => 'SST-PFIS-01', 'nombre' => 'Peligro y Riesgos Físicos'],
            ['codigo' => 'SST-ERG-01', 'nombre' => 'Riesgo y Ergonomía'],
            ['codigo' => 'CP2-RAP2-ELEC', 'nombre' => 'Peligro y Riesgos Eléctricos'],
            ['codigo' => 'CP2-RAP2-LOC', 'nombre' => 'Peligro y Riesgos Locativos'],
            ['codigo' => 'CP2-RAP2-MEC', 'nombre' => 'Peligro y Riesgos Mecánicos'],
            ['codigo' => 'CP1-RAP2', 'nombre' => 'Seguridad Física Empresarial'],
            ['codigo' => 'CPE-RAP7-TAL', 'nombre' => 'Gestión del Talento Humano (SST)'],
            ['codigo' => 'SST-TOX-01', 'nombre' => 'Toxicología Ocupacional'],
            ['codigo' => 'CP2-RAP2-BRIG', 'nombre' => 'Brigadas de Emergencia'],
            ['codigo' => 'SST-HIG1-01', 'nombre' => 'Higiene Industrial I'],
            ['codigo' => 'CP1-RAP7', 'nombre' => 'Vigilancia y Epidemiológica Ocupacional'],
            ['codigo' => 'SST-MAN-01', 'nombre' => 'Mantenimiento Físico Preventivo'],
            ['codigo' => 'CP1-RAP6', 'nombre' => 'Administración de Riesgos'],
            ['codigo' => 'CP4-RAP6', 'nombre' => 'Herramientas Informáticas Aplicadas I'],
            ['codigo' => 'CF4-RAE', 'nombre' => 'Lengua Extranjera Nivel Intermedio I'],
            ['codigo' => 'SST-MET-01', 'nombre' => 'Metodología de la Investigación (SST)'],
            ['codigo' => 'SST-SAN-01', 'nombre' => 'Saneamiento Básico'],
            ['codigo' => 'CP2-RAP2-EMER', 'nombre' => 'Gestión de Planes de Emergencias y Contingencia'],
            ['codigo' => 'SST-HIG2-01', 'nombre' => 'Higiene Industrial II'],
            ['codigo' => 'C2-RAP2', 'nombre' => 'Gestión de la Seguridad Industrial'],
            ['codigo' => 'CP3-RAP3-CAD', 'nombre' => 'Cadena de Custodia'],
            ['codigo' => 'CP4-RAP4', 'nombre' => 'Electiva Libre'],
            ['codigo' => 'CPS-RAP5-INF', 'nombre' => 'Herramientas Informáticas Aplicadas II'],
            ['codigo' => 'C4-RAE', 'nombre' => 'Lengua Extranjera Nivel Intermedio II'],
            ['codigo' => 'SST-AMB-01', 'nombre' => 'Riesgos Ambientales'],
            ['codigo' => 'SP1-RAP7', 'nombre' => 'Gestión de la Medicina Preventiva y del Trabajo'],
            ['codigo' => 'SST-REH-01', 'nombre' => 'Rehabilitación y Reintegración Laboral'],
            ['codigo' => 'CPS-RAP7', 'nombre' => 'Riesgos en la Agroindustria'],
            ['codigo' => 'C2-RAP5', 'nombre' => 'Prevención en Actividades Críticas'],
            ['codigo' => 'CPE-RAP5', 'nombre' => 'Calidad en el sector salud: procesos y auditoría'],
            ['codigo' => 'CP4-RAP4-RES', 'nombre' => 'Resumen de Grado'],
            ['codigo' => 'CPS-RAP7-ISO', 'nombre' => 'Sistema de Gestión de la Seguridad y Salud en el Trabajo: Norma ISO'],
            ['codigo' => 'CP2-RAP2-DES', 'nombre' => 'Gestión del Riesgo de Desastres'],
            ['codigo' => 'CPS-RAP7-MIN', 'nombre' => 'Riesgos en la Industria Minera y de Construcción'],
            ['codigo' => 'CPS-RAP7-PET', 'nombre' => 'Riesgos en la Industria Petrolera'],
            ['codigo' => 'CPS-RAP7-ALI', 'nombre' => 'Riesgos en la Industria Alimenticia'],
            ['codigo' => 'CPE-RAP6', 'nombre' => 'Administración de Riesgos II'],
            ['codigo' => 'CP3-RAP3-SGS', 'nombre' => 'Electiva II: Sistemas de Gestión'],
            ['codigo' => 'CPE-RAPE-PER', 'nombre' => 'Control de Pérdidas'],
            ['codigo' => 'CPS-RAP6', 'nombre' => 'Lengua Extranjera Nivel Específico'],
            ['codigo' => 'SST-IOP-01', 'nombre' => 'Investigación de Operaciones (SST)'],
            ['codigo' => 'CPE-RAPE-PRAC', 'nombre' => 'Práctica Profesional (SST)'],
            ['codigo' => 'C2-RAP2-SGS3', 'nombre' => 'Electiva III: Sistemas de Gestión'],
            ['codigo' => 'C2-RAP2-DEM', 'nombre' => 'Demolición de Estructuras'],
            ['codigo' => 'CPS-RAP1-ESP', 'nombre' => 'Lengua Extranjera Nivel Específico (SST)'],
            ['codigo' => 'SST-TRAB-01', 'nombre' => 'Trabajo de Grado'],

            // 4. PROFESIONAL EN INGENIERÍA INFORMÁTICA (AG. 27-2020)
            ['codigo' => '13161111', 'nombre' => 'Conceptos y Métodos Matemáticos'],
            ['codigo' => '131611221', 'nombre' => 'Elementos Básicos de Programación'],
            ['codigo' => '131612121', 'nombre' => 'Teorías de la Ingeniería Informática'],
            ['codigo' => '131614341', 'nombre' => 'Normas de Participación Ciudadana e Institucional'],
            ['codigo' => '131615241', 'nombre' => 'Herramientas y Técnicas de Estudio - Educación a Distancia'],
            ['codigo' => '13162611', 'nombre' => 'Métodos del Cálculo Diferencial e Integral'],
            ['codigo' => '13162621011', 'nombre' => 'Postulados y Principios de la Física Mecánica'],
            ['codigo' => '131621323', 'nombre' => 'Lenguaje de Programación Funcional'],
            ['codigo' => '131622221', 'nombre' => 'Interacción de Objetos por medio de Programación'],
            ['codigo' => '131624641', 'nombre' => 'Desarrollo de Competencia Comunicativa en Segunda Lengua A1 Básico Principiante'],
            ['codigo' => '13163211', 'nombre' => 'Teoremas y Postulados Matemáticos'],
            ['codigo' => '131621011', 'nombre' => 'Diseño de Circuito Electrónico Digital'],
            ['codigo' => '131631421', 'nombre' => 'Estructuras de Datos de la Información'],
            ['codigo' => '131632323', 'nombre' => 'Aplicaciones en Entorno Gráfico con Orientada a Objetos'],
            ['codigo' => '131633631', 'nombre' => 'Conceptos y Principios de la Contabilidad General'],
            ['codigo' => '131634741', 'nombre' => 'Competencia Comunicativa en Segunda Lengua A2 Básico Principiante'],
            ['codigo' => '131635342', 'nombre' => 'Teoría del Conocimiento'],
            ['codigo' => '13164311', 'nombre' => 'Razonamiento Matemático en Vectores y Matrices'],
            ['codigo' => '131641521', 'nombre' => 'Estructuras de Datos no Lineales'],
            ['codigo' => '131642423', 'nombre' => 'Herramientas Informáticas Orientadas a Eventos'],
            ['codigo' => '131643023', 'nombre' => 'Criterios para la Selección de Hardware'],
            ['codigo' => '131643731', 'nombre' => 'Herramientas de Ingeniería Económica'],
            ['codigo' => '131644841', 'nombre' => 'Competencia Comunicativa en Segunda Lengua A3 Básico Intermedio'],
            ['codigo' => '13165411', 'nombre' => 'Procesos Estadísticos y Probabilísticos (Ing)'],
            ['codigo' => '13164711', 'nombre' => 'Cálculo Vectorial en la Computación Gráfica'],
            ['codigo' => '131651623', 'nombre' => 'Representación de Información en Base de Datos'],
            ['codigo' => '131652523', 'nombre' => 'Técnicas del Diseño Hipermedia en la Informática'],
            ['codigo' => '131663121', 'nombre' => 'Conceptos Básicos de la Comunicación Electrónica'],
            ['codigo' => '131653831', 'nombre' => 'Creatividad Empresarial y Plan de Negocios (Ing)'],
            ['codigo' => '131854941', 'nombre' => 'Competencia Comunicativa en Segunda Lengua A4 Básico Intermedio'],
            ['codigo' => '131665441', 'nombre' => 'Métodos y Técnicas de Investigación (Ing)'],
            ['codigo' => '13166511', 'nombre' => 'Modelos Matemáticos y Algoritmos'],
            ['codigo' => '131661723', 'nombre' => 'Aplicaciones Orientadas a la Web'],
            ['codigo' => '131662621', 'nombre' => 'Procesos Involucrados en el Modelado de Software'],
            ['codigo' => '131663223', 'nombre' => 'Diseño e Implementación de Redes de Datos'],
            ['codigo' => '131663931', 'nombre' => 'Formulación y Evaluación de Proyectos y Planes de Negocios (Ing)'],
            ['codigo' => '131665041', 'nombre' => 'Competencia Comunicativa en Segunda Lengua B1 Intermedio Principiante'],
            ['codigo' => '131665541', 'nombre' => 'Seminario de Grado I'],
            ['codigo' => '13167611', 'nombre' => 'Métodos Matemáticos Aplicados en Simulación'],
            ['codigo' => '131671823', 'nombre' => 'Algoritmos Lógicos en el Desarrollo de Software'],
            ['codigo' => '131672721', 'nombre' => 'Técnicas para el Desarrollo de Software'],
            ['codigo' => '131673321', 'nombre' => 'Arquitectura de Sistemas Operativos'],
            ['codigo' => '131674031', 'nombre' => 'Gerencia de Proyectos Informáticos'],
            ['codigo' => '131675141', 'nombre' => 'Competencia Comunicativa en Segunda Lengua B2 Intermedio'],
            ['codigo' => '131665641', 'nombre' => 'Seminario de Grado II'],
            ['codigo' => '131675742', 'nombre' => 'Proyecto de Investigación (Ing)'],
            ['codigo' => '13168011', 'nombre' => 'Elementos Gráficos de Comunicación Visual'],
            ['codigo' => '131681921', 'nombre' => 'Modelos de Software Distribuido'],
            ['codigo' => '131682823', 'nombre' => 'Informática para el Comercio Electrónico'],
            ['codigo' => '131683423', 'nombre' => 'Técnicas para el Diseño de Aplicaciones Telemáticas'],
            ['codigo' => '131684441', 'nombre' => 'Principios y Normas del Derecho Informático'],
            ['codigo' => '131685842', 'nombre' => 'Desarrollo del Proyecto de Investigación (Ing)'],
            ['codigo' => '131692023', 'nombre' => 'Electiva (Ing)'],
            ['codigo' => '131692923', 'nombre' => 'Diseño e Implementación de Sistemas de Telemetría'],
            ['codigo' => '131693521', 'nombre' => 'Técnicas y Herramientas de Seguridad Informática'],
            ['codigo' => '131694131', 'nombre' => 'Auditorías de Sistemas'],
            ['codigo' => '131604232', 'nombre' => 'Práctica Profesional (Ing)'],
            ['codigo' => '131694541', 'nombre' => 'Leyes Éticas y Morales (Ing)'],

            // 5. TECNOLOGÍA EN DECORACIÓN DE INTERIORES
            ['codigo' => '1060101', 'nombre' => 'Interiorismo (Fundamentos de decoración)'],
            ['codigo' => '1060104', 'nombre' => 'Historia del Arte y la Decoración'],
            ['codigo' => '1060105', 'nombre' => 'Fundamentos de Obra y Restauración'],
            ['codigo' => '1060106', 'nombre' => 'Geometría Aplicada a la Decoración'],
            ['codigo' => '1060102', 'nombre' => 'Dibujo Artístico y Bocetos'],
            ['codigo' => '1060103', 'nombre' => 'Cultura, Diseño y Decoración'],
            ['codigo' => '1060108', 'nombre' => 'Deporte Formativo'],
            ['codigo' => '1060107', 'nombre' => 'Técnicas de Estudio (Decoración)'],
            ['codigo' => '1060201', 'nombre' => 'Interiorismo II (Principios de composición en la decoración)'],
            ['codigo' => '1060203', 'nombre' => 'Estilos'],
            ['codigo' => '1060204', 'nombre' => 'Dibujo y Expresión Artística'],
            ['codigo' => '1060205', 'nombre' => 'Dibujo Técnico'],
            ['codigo' => '1060202', 'nombre' => 'Taller I (Vivienda y comunicación)'],
            ['codigo' => 'DEC-MET-01', 'nombre' => 'Metodología de la Investigación (Decoración)'],
            ['codigo' => '1060301', 'nombre' => 'Interiorismo III (Espacios comerciales)'],
            ['codigo' => '1060303', 'nombre' => 'Maquetas'],
            ['codigo' => '1060403', 'nombre' => 'Tecnología de los Materiales I'],
            ['codigo' => '1060302', 'nombre' => 'Taller II (Arte decorativo y espacios comerciales)'],
            ['codigo' => '1060305', 'nombre' => 'Informática I'],
            ['codigo' => '1060401', 'nombre' => 'Interiorismo IV (Espacios gastronómicos)'],
            ['codigo' => '1060403-TEC', 'nombre' => 'Tecnología I (Técnicas constructivas)'],
            ['codigo' => '1060404', 'nombre' => 'Tecnología de los Materiales II'],
            ['codigo' => '1060402', 'nombre' => 'Taller III (Muebles y espacios gastronómicos)'],
            ['codigo' => '1060406', 'nombre' => 'Informática II'],
            ['codigo' => '1060405', 'nombre' => 'Costos (Decoración)'],
            ['codigo' => '1060408', 'nombre' => 'Inglés I (Decoración)'],
            ['codigo' => '1060501', 'nombre' => 'Interiorismo V (Stand y exposiciones)'],
            ['codigo' => '1060503', 'nombre' => 'Tecnología II (Iluminación)'],
            ['codigo' => '1060502', 'nombre' => 'Taller IV (Arte decorativo)'],
            ['codigo' => '1060504', 'nombre' => 'Electiva I (Decoración)'],
            ['codigo' => '1060506', 'nombre' => 'Informática III'],
            ['codigo' => '1060505', 'nombre' => 'Presupuestos (Decoración)'],
            ['codigo' => '1060507', 'nombre' => 'Inglés II (Decoración)'],
            ['codigo' => '1060507-SEM', 'nombre' => 'Seminario de Grado (Decoración)'],
            ['codigo' => '1060601', 'nombre' => 'Interiorismo VI (Hoteles)'],
            ['codigo' => '1060603', 'nombre' => 'Tecnología III (Instalaciones)'],
            ['codigo' => '1060606', 'nombre' => 'Arquitectura Sostenible'],
            ['codigo' => '1060602', 'nombre' => 'Taller V (Muebles y accesorios hoteles)'],
            ['codigo' => '1060604', 'nombre' => 'Electiva II (Decoración)'],
            ['codigo' => '1060607', 'nombre' => 'Ética (Decoración)'],
            ['codigo' => '1060605', 'nombre' => 'Formulación y Evaluación de Proyectos (Decoración)'],
            ['codigo' => '1060608', 'nombre' => 'Inglés III (Decoración)'],

            // 6. CONTADURÍA PÚBLICA DISTANCIA
            ['codigo' => '11601111', 'nombre' => 'Procedimientos Matemáticos'],
            ['codigo' => '11601211', 'nombre' => 'Ordenamiento Jurídico Constitucional e Institucional'],
            ['codigo' => '11602521', 'nombre' => 'Agentes Microeconómicos'],
            ['codigo' => '11601325', 'nombre' => 'Principios Básicos de Contabilidad Financiera'],
            ['codigo' => '11601425', 'nombre' => 'Administración, Entorno y Alcances'],
            ['codigo' => '11601631', 'nombre' => 'Herramientas Pedagógicas y Didácticas de la Educación a Distancia'],
            ['codigo' => '11602111', 'nombre' => 'Procesos Estadísticos y Probabilísticos'],
            ['codigo' => '11602211', 'nombre' => 'Bases Jurídicas de la Actividad Empresarial'],
            ['codigo' => 'CONT-MAC-01', 'nombre' => 'Agentes Macroeconómicos (Contaduría)'],
            ['codigo' => '11602325', 'nombre' => 'Procedimientos Contables en el Manejo de Activos'],
            ['codigo' => '11602425', 'nombre' => 'Bases Fundamentales de la Planeación'],
            ['codigo' => '11602631', 'nombre' => 'Métodos y Técnicas de Investigación (Contaduría)'],
            ['codigo' => '11603211', 'nombre' => 'Normatividad Laboral'],
            ['codigo' => '11603525', 'nombre' => 'Comportamiento Monetario Mundial y Nacional'],
            ['codigo' => '11603325', 'nombre' => 'Procedimientos Contables en el Manejo de Pasivos'],
            ['codigo' => '11603125', 'nombre' => 'Herramientas Financieras'],
            ['codigo' => '11603425', 'nombre' => 'Técnicas de Organización Empresarial'],
            ['codigo' => '11603635', 'nombre' => 'Inglés I (Contaduría)'],
            ['codigo' => '11603731', 'nombre' => 'Comprensión de Texto y Lectura Crítica (Contaduría I)'],
            ['codigo' => '11604111', 'nombre' => 'Normatividad sobre Contratación Estatal'],
            ['codigo' => '11604525', 'nombre' => 'Mercados'],
            ['codigo' => '11604225', 'nombre' => 'Procedimientos Contables de Patrimonio y Sociedades'],
            ['codigo' => '11604325', 'nombre' => 'Gestión Financiera'],
            ['codigo' => '11604425', 'nombre' => 'Procesos de Dirección'],
            ['codigo' => '11604635', 'nombre' => 'Inglés II (Contaduría)'],
            ['codigo' => '11604731', 'nombre' => 'Comprensión de Texto y Lectura Crítica (Contaduría II)'],
            ['codigo' => '11605535', 'nombre' => 'Componentes de la Formulación de Proyectos'],
            ['codigo' => '11605125', 'nombre' => 'Informes Financieros y Matrices y Subsidiarias'],
            ['codigo' => '11606125', 'nombre' => 'Elementos del Costo por Órdenes de Producción'],
            ['codigo' => '11605225', 'nombre' => 'Registro de Operaciones Comerciales del Ciclo Contable'],
            ['codigo' => '11606725', 'nombre' => 'Normatividad Tributaria sobre IVA y Retención en la Fuente'],
            ['codigo' => '11605325', 'nombre' => 'Análisis Financiero en el Área Contable'],
            ['codigo' => '11605421', 'nombre' => 'Creatividad Empresarial y Plan de Negocios (Contaduría)'],
            ['codigo' => '11605635', 'nombre' => 'Inglés III (Contaduría)'],
            ['codigo' => '11605731', 'nombre' => 'Razonamiento Matemático (Contaduría)'],
            ['codigo' => '11607225', 'nombre' => 'Elementos del Costo por Procesos y Estándar'],
            ['codigo' => '11606223', 'nombre' => 'Herramientas Tecnológicas Aplicadas a los Sistemas Contables'],
            ['codigo' => '11606325', 'nombre' => 'El Presupuesto como Herramienta Gerencial (Contaduría)'],
            ['codigo' => '11606531', 'nombre' => 'Psicología Empresarial'],
            ['codigo' => '11606425', 'nombre' => 'Electiva I (Contaduría)'],
            ['codigo' => '11607323', 'nombre' => 'Paquetes Contables'],
            ['codigo' => '11607425', 'nombre' => 'Normatividad Tributaria sobre Impuesto de Renta y Complementarios'],
            ['codigo' => '11607525', 'nombre' => 'Normas de Auditoría y Aseguramiento'],
            ['codigo' => '11607625', 'nombre' => 'Técnicas de Control'],
            ['codigo' => '11607111', 'nombre' => 'Comercio y Normatividad Internacional'],
            ['codigo' => '11607735', 'nombre' => 'Inglés V (Contaduría)'],
            ['codigo' => '11608125', 'nombre' => 'Procedimientos Contables del Sector Público'],
            ['codigo' => '11608223', 'nombre' => 'Práctica Profesional (Contaduría)'],
            ['codigo' => '11608325', 'nombre' => 'Procedimientos Tributarios'],
            ['codigo' => '11608425', 'nombre' => 'Auditoría a los Estados Financieros'],
            ['codigo' => '11608525', 'nombre' => 'Electiva II (Contaduría)'],
            ['codigo' => '11608633', 'nombre' => 'Proyecto de Investigación (Contaduría)'],
            ['codigo' => '11608731', 'nombre' => 'Presaber Específico (Contaduría)'],
            ['codigo' => '11608535', 'nombre' => 'Inglés VI (Contaduría)'],
            ['codigo' => '11609125', 'nombre' => 'Procedimientos de Registros en Diversos Tipos de Contabilidad'],
            ['codigo' => '11609325', 'nombre' => 'Desarrollo Sostenible Aplicado al Área Contable'],
            ['codigo' => '11609425', 'nombre' => 'Procesos de Revisoría Fiscal'],
            ['codigo' => '11609533', 'nombre' => 'Desarrollo del Proyecto de Investigación (Contaduría)'],
            ['codigo' => '11609631', 'nombre' => 'Leyes Éticas y Morales (Contaduría)'],

            // 7. TECNOLOGÍA EN GESTIÓN DE LA SEGURIDAD Y SALUD EN EL TRABAJO
            ['codigo' => 'TG-SST-01', 'nombre' => 'Promoción de la Salud Laboral / Prevención de Riesgos y Peligros en Áreas de Trabajo'],
            ['codigo' => 'TG-SST-02', 'nombre' => 'Atención de Servicios de Emergencia'],
            ['codigo' => 'TG-SST-03', 'nombre' => 'Gestión y Operatividad del SG-SST'],

            // 8. INGENIERÍA INFORMÁTICA (DISTANCIA AUNAR)
            ['codigo' => '131601111', 'nombre' => 'Conceptos y Métodos Matemáticos (Distancia)'],
            ['codigo' => '131601223', 'nombre' => 'Fundamentos de Programación'],
            ['codigo' => '1316011425', 'nombre' => 'Sistemas Operativos'],
            ['codigo' => '13160151', 'nombre' => 'Responsabilidad Ciudadana e Identidad Institucional'],
            ['codigo' => '131601611', 'nombre' => 'Herramientas y Técnicas de Estudio - Educación a Distancia (Distancia)'],
            ['codigo' => '131602111', 'nombre' => 'Lógica Booleana'],
            ['codigo' => '131602211', 'nombre' => 'Cálculo Diferencial'],
            ['codigo' => '131602311', 'nombre' => 'Electromagnetismo'],
            ['codigo' => '131602423', 'nombre' => 'Programación (Distancia)'],
            ['codigo' => '131602623', 'nombre' => 'Sistemas Operativos II'],
            ['codigo' => '131602711', 'nombre' => 'Taller de Comunicación Oral y Escrita'],
            ['codigo' => '131602815', 'nombre' => 'Inglés A11'],
            ['codigo' => '131603111', 'nombre' => 'Álgebra Lineal'],
            ['codigo' => '131603211', 'nombre' => 'Cálculo Integral'],
            ['codigo' => '131603314', 'nombre' => 'Electrónica Analógica'],
            ['codigo' => '131603423', 'nombre' => 'Programación POO (Distancia)'],
            ['codigo' => '131603523', 'nombre' => 'Estructuras de Datos'],
            ['codigo' => '131603611', 'nombre' => 'Gestión Estratégica y Empresarial'],
            ['codigo' => '131603715', 'nombre' => 'Inglés A12'],
            ['codigo' => '131603811', 'nombre' => 'Epistemología de la Investigación'],
            ['codigo' => '131605111', 'nombre' => 'Probabilidad y Estadística (Distancia)'],
            ['codigo' => '131604111', 'nombre' => 'Cálculo Multivariable'],
            ['codigo' => '131604214', 'nombre' => 'Electrónica Digital'],
            ['codigo' => '131604323', 'nombre' => 'Programación Móvil y Sistemas Embebidos'],
            ['codigo' => '131604423', 'nombre' => 'Bases de Datos (Distancia)'],
            ['codigo' => '131605323', 'nombre' => 'Estructuras de Datos II'],
            ['codigo' => '131604511', 'nombre' => 'Creatividad e Innovación Empresarial (Distancia)'],
            ['codigo' => '131605611', 'nombre' => 'Emprendimiento y Plan de Negocios (Distancia)'],
            ['codigo' => '131604611', 'nombre' => 'Seminario de Desarrollo Humano I (Habilidades Humanas)'],
            ['codigo' => '131604715', 'nombre' => 'Inglés A21'],
            ['codigo' => '131604811', 'nombre' => 'Investigación Pura y Aplicada'],
            ['codigo' => '131605223', 'nombre' => 'Programación POO II'],
            ['codigo' => '131605424', 'nombre' => 'Comunicación Electrónica (Distancia)'],
            ['codigo' => '131605523', 'nombre' => 'Electiva (Distancia)'],
            ['codigo' => '131605711', 'nombre' => 'Seminario de Desarrollo Humano II (Habilidades Cognitivas)'],
            ['codigo' => '131605815', 'nombre' => 'Inglés A22'],
            ['codigo' => '131606111', 'nombre' => 'Investigación de Operaciones (Distancia)'],
            ['codigo' => '131606225', 'nombre' => 'Big Data'],
            ['codigo' => '131606323', 'nombre' => 'Bases de Datos II (Distancia)'],
            ['codigo' => '133606423', 'nombre' => 'Redes de Datos (Distancia)'],
            ['codigo' => '131606523', 'nombre' => 'Electiva II (Distancia)'],
            ['codigo' => '13160611', 'nombre' => 'Formulación y Evaluación de Proyectos (Distancia)'],
            ['codigo' => '131606711', 'nombre' => 'Seminario de Desarrollo Humano III (Habilidades Sociales)'],
            ['codigo' => '131606815', 'nombre' => 'Inglés B11'],
            ['codigo' => '131606925', 'nombre' => 'Seminario de Grado (Propuesta)'],
            ['codigo' => '131607111', 'nombre' => 'Simulación Digital'],
            ['codigo' => '131607225', 'nombre' => 'Inteligencia Computacional I'],
            ['codigo' => '131607323', 'nombre' => 'Programación Web / Front End'],
            ['codigo' => '131607423', 'nombre' => 'Ingeniería de Software'],
            ['codigo' => '131607523', 'nombre' => 'Telemática'],
            ['codigo' => '131607623', 'nombre' => 'Hacking'],
            ['codigo' => '131607715', 'nombre' => 'Inglés B12'],
            ['codigo' => '131607825', 'nombre' => 'Seminario de Grado II (Anteproyecto)'],
            ['codigo' => '131608123', 'nombre' => 'Inteligencia Computacional II'],
            ['codigo' => '131608223', 'nombre' => 'Programación Web Back End'],
            ['codigo' => '131608323', 'nombre' => 'Sistemas Distribuidos'],
            ['codigo' => '131608423', 'nombre' => 'Sistemas de Telemetría'],
            ['codigo' => '131608525', 'nombre' => 'Sistemas de Gestión de Seguridad de la Información'],
            ['codigo' => '131608611', 'nombre' => 'Gestión de Proyectos Tecnológicos'],
            ['codigo' => '131608723', 'nombre' => 'Desarrollo de Trabajo de Grado I'],
            ['codigo' => '131609123', 'nombre' => 'Electiva III (Distancia)'],
            ['codigo' => '131609223', 'nombre' => 'Práctica Profesional (Distancia)'],
            ['codigo' => '131609311', 'nombre' => 'Leyes Éticas y Morales (Distancia)'],
            ['codigo' => '131609411', 'nombre' => 'Principios y Normas del Derecho Informático (Distancia)'],
            ['codigo' => '131609523', 'nombre' => 'Desarrollo de Trabajo de Grado II'],
        ];

        foreach ($asignaturas as $data) {
            Asignatura::updateOrCreate(
                ['nombre' => $data['nombre']],
                [
                    'codigo' => $data['codigo'],
                    'creditos' => 3,
                    'tipo' => 'Teórico',
                    'estado' => 'Activo'
                ]
            );
        }
    }
}
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
