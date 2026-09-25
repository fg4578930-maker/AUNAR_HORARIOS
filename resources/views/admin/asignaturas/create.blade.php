<x-app-layout>
    <div class="min-h-screen bg-slate-100 py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100 p-8">
                
                <div class="mb-6 border-b pb-4">
                    <span class="text-xs font-bold text-[#0b2545] uppercase tracking-wider">Plan de Estudios</span>
                    <h2 class="text-xl font-bold text-slate-800 mt-1">Registrar Nueva Asignatura</h2>
                    <p class="text-sm text-slate-500">Configura los créditos, el tipo y los datos de la materia.</p>
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

                <form method="POST" action="{{ route('admin.asignaturas.store') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Código de la Asignatura *</label>
                        <input type="text" name="codigo" value="{{ old('codigo') }}" required placeholder="Ej. ASIG-101"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Nombre de la Asignatura *</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}" required placeholder="Ej. Programación Orientada a Objetos"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Créditos Académicos *</label>
                        <input type="number" name="creditos" value="{{ old('creditos', 3) }}" required min="1" max="10"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Tipo de Asignatura *</label>
                        <select name="tipo" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm">
                            <option value="Teórico" {{ old('tipo') === 'Teórico' ? 'selected' : '' }}>Teórico</option>
                            <option value="Práctico" {{ old('tipo') === 'Práctico' ? 'selected' : '' }}>Práctico</option>
                            <option value="Teórico/Práctico" {{ old('tipo') === 'Teórico/Práctico' ? 'selected' : '' }}>Teórico/Práctico</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Estado *</label>
                        <select name="estado" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-100">
                        <a href="{{ route('asignaturas.index') }}" class="text-sm font-semibold text-slate-600 hover:text-slate-900 transition">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-6 py-2.5 rounded-xl shadow-md text-sm transition">
                            Guardar Asignatura
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>