<x-app-layout>
    <div class="min-h-screen bg-slate-50 py-12">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-3xl border border-gray-100 p-8">
                
                <div class="mb-6 border-b pb-4">
                    <span class="text-xs font-extrabold text-[#0b2545] uppercase tracking-wider">Estructura Curricular</span>
                    <h2 class="text-xl font-extrabold text-slate-900 mt-1">Crear Nuevo Plan de Estudio</h2>
                    <p class="text-sm text-slate-500">Selecciona el programa académico y configura la vigencia y semestres.</p>
                </div>

                @if ($errors->any())
                    <div class="mb-6 bg-rose-100 border-l-4 border-rose-500 text-rose-700 p-4 rounded-r text-sm shadow-sm">
                        <ul class="space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.planes.store') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-600 mb-1.5">Programa Académico *</label>
                        <select name="programa_academico_id" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm">
                            <option value="">Seleccione un programa...</option>
                            @foreach($programas as $prog)
                                <option value="{{ $prog->id }}" {{ old('programa_academico_id') == $prog->id ? 'selected' : '' }}>
                                    [{{ $prog->codigo }}] {{ $prog->nombre }} ({{ $prog->facultad }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-600 mb-1.5">Tipo de Plan de Estudio *</label>
                        <select name="tipo" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm">
                            <option value="Nuevo" {{ old('tipo') === 'Nuevo' ? 'selected' : '' }}>Nuevo</option>
                            <option value="Antiguo" {{ old('tipo') === 'Antiguo' ? 'selected' : '' }}>Antiguo</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-600 mb-1.5">Número de Semestres *</label>
                        <input type="number" name="semestres" value="{{ old('semestres', 8) }}" required min="1" max="12"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" />
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-600 mb-1.5">Estado *</label>
                        <select name="estado" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-100">
                        <a href="{{ route('planes.index') }}" class="text-sm font-bold text-slate-600 hover:text-slate-900 transition">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-extrabold px-6 py-2.5 rounded-xl shadow-md text-sm transition">
                            Guardar Plan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>