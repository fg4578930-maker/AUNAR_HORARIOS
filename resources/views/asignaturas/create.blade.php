<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-xl text-[#0b2545] leading-tight">
            {{ __('Crear Nueva Asignatura') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 p-8">
                
                <div class="border-b border-gray-100 pb-4 mb-6">
                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider">Nuevo Registro</span>
                    <h3 class="text-2xl font-black text-[#0b2545] mt-2">Registrar Asignatura Académica</h3>
                </div>

                @if ($errors->any())
                    <div class="mb-6 bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-r shadow-sm">
                        <ul class="list-disc list-inside text-sm font-semibold">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.asignaturas.store') }}" method="POST">
                    @csrf

                    <!-- Selección de Programa Académico -->
                    <div class="mb-5">
                        <label for="programa_id" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Programa Académico</label>
                        <select name="programa_id" id="programa_id" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required onchange="cargarInfoPrograma(this.value)">
                            <option value="">Seleccione un programa</option>
                            @foreach($programas as $prog)
                                <option value="{{ $prog->id }}" {{ old('programa_id') == $prog->id ? 'selected' : '' }}>{{ $prog->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Campos Autocompletados (Código del Programa y Facultad) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                        <div>
                            <label class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Código del Programa</label>
                            <input type="text" id="programa_codigo" class="block w-full rounded-xl bg-slate-100 border-gray-200 text-sm py-3 text-slate-600" disabled placeholder="Se autocompleta...">
                        </div>
                        <div>
                            <label class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Facultad</label>
                            <input type="text" id="programa_facultad" class="block w-full rounded-xl bg-slate-100 border-gray-200 text-sm py-3 text-slate-600" disabled placeholder="Se autocompleta...">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="codigo" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Código de la Asignatura</label>
                        <input type="text" name="codigo" id="codigo" value="{{ old('codigo') }}" placeholder="Ej: AEPA01 o 11701111" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                    </div>

                    <div class="mb-5">
                        <label for="nombre" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Nombre de la Asignatura</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="Ej: Procedimientos matemáticos" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-5">
                        <div>
                            <label for="plan_estudios" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Plan de Estudios</label>
                            <select name="plan_estudios" id="plan_estudios" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                                <option value="">Seleccione</option>
                                <option value="Antiguo" {{ old('plan_estudios') == 'Antiguo' ? 'selected' : '' }}>Antiguo</option>
                                <option value="Nuevo" {{ old('plan_estudios') == 'Nuevo' ? 'selected' : '' }}>Nuevo</option>
                            </select>
                        </div>

                        <div>
                            <label for="semestre" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Semestre</label>
                            <select name="semestre" id="semestre" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                                <option value="">Seleccione</option>
                                @for($i = 1; $i <= 9; $i++)
                                    <option value="{{ $i }}" {{ old('semestre') == $i ? 'selected' : '' }}>Semestre {{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div>
                            <label for="creditos" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Créditos</label>
                            <input type="number" name="creditos" id="creditos" value="{{ old('creditos') }}" min="1" max="10" placeholder="Ej: 3" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
                        <div>
                            <label for="tipo" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Tipo de Asignatura</label>
                            <select name="tipo" id="tipo" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                                <option value="Teórico" {{ old('tipo') == 'Teórico' ? 'selected' : '' }}>Teórico</option>
                                <option value="Teórico-Práctico" {{ old('tipo') == 'Teórico-Práctico' ? 'selected' : '' }}>Teórico-Práctico</option>
                                <option value="Práctico" {{ old('tipo') == 'Práctico' ? 'selected' : '' }}>Práctico</option>
                            </select>
                        </div>

                        <div>
                            <label for="estado" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Estado</label>
                            <select name="estado" id="estado" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                                <option value="Activo" {{ old('estado') == 'Activo' ? 'selected' : '' }}>Activo</option>
                                <option value="Inactivo" {{ old('estado') == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-100">
                        <a href="{{ route('asignaturas.index') }}" class="bg-slate-200 hover:bg-slate-300 text-slate-800 font-extrabold py-2.5 px-5 rounded-xl shadow transition text-sm">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-black py-2.5 px-6 rounded-xl shadow transition text-sm">
                            Guardar Asignatura
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Script AJAX para autocompletar código de programa y facultad -->
    <script>
        function cargarInfoPrograma(programaId) {
            if (!programaId) {
                document.getElementById('programa_codigo').value = '';
                document.getElementById('programa_facultad').value = '';
                return;
            }

            fetch(`/api/programa-info/${programaId}`)
                .then(response => response.json())
                .then(data => {
                    if (data && !data.error) {
                        document.getElementById('programa_codigo').value = data.codigo;
                        document.getElementById('programa_facultad').value = data.facultad;
                    }
                })
                .catch(error => console.error('Error al obtener la información del programa:', error));
        }

        // Si ya hay un programa seleccionado previamente (por error de validación), cargar su info al iniciar
        window.addEventListener('DOMContentLoaded', () => {
            const selectPrograma = document.getElementById('programa_id');
            if (selectPrograma.value) {
                cargarInfoPrograma(selectPrograma.value);
            }
        });
    </script>
</x-app-layout>