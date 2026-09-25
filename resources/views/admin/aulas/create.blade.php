<x-app-layout>
    <div class="min-h-screen bg-slate-100 py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Encabezado -->
            <div class="mb-6 flex justify-between items-center">
                <div>
                    <span class="text-xs font-bold text-[#0b2545] uppercase tracking-wider">Infraestructura</span>
                    <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Crear Nueva Aula o Laboratorio</h2>
                </div>
                <a href="{{ route('aulas.index') }}" class="text-xs font-semibold text-[#0b2545] hover:text-slate-900 bg-white px-4 py-2 rounded-xl shadow-sm border border-gray-200 transition">
                    &larr; Volver
                </a>
            </div>

            <!-- Errores de validación -->
            @if ($errors->any())
                <div class="mb-6 bg-rose-100 border-l-4 border-rose-500 text-rose-700 p-4 rounded-r shadow-sm text-sm">
                    <p class="font-bold">Por favor corrige los siguientes errores:</p>
                    <ul class="mt-1 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Formulario -->
            <div class="bg-white shadow-xl rounded-2xl border border-gray-100 p-8">
                <form action="{{ route('admin.aulas.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nombre del Aula -->
                        <div>
                            <label for="nombre" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Nombre del Aula o Espacio *</label>
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required placeholder="Ej. Laboratorio 3, Taller 1" class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                        </div>

                        <!-- Piso -->
                        <div>
                            <label for="piso" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Piso *</label>
                            <select name="piso" id="piso" required class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                                <option value="">Seleccione el piso</option>
                                <option value="1" {{ old('piso') == '1' ? 'selected' : '' }}>Piso 1</option>
                                <option value="2" {{ old('piso') == '2' ? 'selected' : '' }}>Piso 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Capacidad Máxima -->
                        <div>
                            <label for="capacidad_max" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Capacidad Máxima (Estudiantes) *</label>
                            <input type="number" name="capacidad_max" id="capacidad_max" value="{{ old('capacidad_max') }}" min="1" required placeholder="Ej. 30" class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                        </div>

                        <!-- Tipo de Aula -->
                        <div>
                            <label for="tipo" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Tipo de Espacio *</label>
                            <select name="tipo" id="tipo" required class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                                <option value="">Seleccione el tipo</option>
                                <option value="Aula" {{ old('tipo') == 'Aula' ? 'selected' : '' }}>Aula</option>
                                <option value="Laboratorio" {{ old('tipo') == 'Laboratorio' ? 'selected' : '' }}>Laboratorio</option>
                                <option value="Taller de diseño" {{ old('tipo') == 'Taller de diseño' ? 'selected' : '' }}>Taller de diseño</option>
                                <option value="Sala móvil" {{ old('tipo') == 'Sala móvil' ? 'selected' : '' }}>Sala móvil</option>
                                <option value="Otro" {{ old('tipo') == 'Otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                        </div>
                    </div>

                    <!-- Uso General o Exclusivo -->
                    <div>
                        <label for="es_uso_general" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Disponibilidad / Uso *</label>
                        <select name="es_uso_general" id="es_uso_general" required class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm" onchange="toggleExclusividad()">
                            <option value="1" {{ old('es_uso_general', '1') == '1' ? 'selected' : '' }}>Uso General (Disponible para todos)</option>
                            <option value="0" {{ old('es_uso_general') == '0' ? 'selected' : '' }}>Exclusivo para Programas Académicos</option>
                        </select>
                    </div>

                    <!-- Sección Exclusividad Programas (Oculta por defecto si es general) -->
                    <div id="seccion_programas" class="p-4 bg-slate-50 rounded-xl border border-gray-200 hidden">
                        <label class="block text-xs font-bold text-[#0b2545] uppercase tracking-wider mb-1">Exclusividad de Programas (Máximo 2)</label>
                        <p class="text-xs text-slate-500 mb-3">Selecciona hasta 2 programas académicos que tendrán exclusividad sobre este espacio.</p>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 max-h-48 overflow-y-auto p-2 bg-white rounded-lg border border-gray-200">
                            @foreach($programas as $programa)
                                <label class="flex items-center space-x-2 text-sm text-slate-700 p-1 hover:bg-slate-50 rounded cursor-pointer">
                                    <input type="checkbox" name="programas_ids[]" value="{{ $programa->id }}" class="programa-checkbox rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" {{ (is_array(old('programas_ids')) && in_array($programa->id, old('programas_ids'))) ? 'checked' : '' }}>
                                    <span>{{ $programa->nombre }}</span>
                                </label>
                            @endforeach
                        </div>
                        <span id="error_programas" class="text-xs text-rose-600 font-semibold mt-1 hidden">Solo puedes seleccionar un máximo de 2 programas.</span>
                    </div>

                    <!-- Prioridad en Asignaturas -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Asignaturas con Prioridad (Opcional)</label>
                        <p class="text-xs text-slate-500 mb-3">Selecciona las asignaturas que requieran o tengan prioridad en este salón.</p>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 max-h-48 overflow-y-auto p-3 bg-slate-50 rounded-xl border border-gray-200">
                            @foreach($asignaturas as $asignatura)
                                <label class="flex items-center space-x-2 text-sm text-slate-700 p-1 hover:bg-white rounded cursor-pointer">
                                    <input type="checkbox" name="asignaturas_ids[]" value="{{ $asignatura->id }}" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" {{ (is_array(old('asignaturas_ids')) && in_array($asignatura->id, old('asignaturas_ids'))) ? 'checked' : '' }}>
                                    <span>{{ $asignatura->nombre }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="flex justify-end space-x-3 pt-4 border-t border-gray-100">
                        <a href="{{ route('aulas.index') }}" class="bg-gray-100 hover:bg-gray-200 text-slate-700 font-bold px-5 py-2.5 rounded-xl text-sm transition">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold px-6 py-2.5 rounded-xl shadow-md text-sm transition">
                            Guardar Aula
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script de control para máximo 2 programas y despliegue de exclusividad -->
    <script>
        function toggleExclusividad() {
            const select = document.getElementById('es_uso_general');
            const seccion = document.getElementById('seccion_programas');
            if (select.value === '0') {
                seccion.classList.remove('hidden');
            } else {
                seccion.classList.add('hidden');
                // Desmarcar checkboxes si cambia a uso general
                document.querySelectorAll('.programa-checkbox').forEach(cb => cb.checked = false);
            }
        }

        // Ejecutar al cargar por si hay valores antiguos (old) con error de validación
        document.addEventListener('DOMContentLoaded', function() {
            toggleExclusividad();

            // Validar límite de 2 checkboxes en programas
            const checkboxes = document.querySelectorAll('.programa-checkbox');
            const errorMsg = document.getElementById('error_programas');

            checkboxes.forEach(cb => {
                cb.addEventListener('change', function() {
                    const checkedCount = document.querySelectorAll('.programa-checkbox:checked').length;
                    if (checkedCount > 2) {
                        this.checked = false;
                        errorMsg.classList.remove('hidden');
                    } else {
                        errorMsg.classList.add('hidden');
                    }
                });
            });
        });
    </script>
</x-app-layout>