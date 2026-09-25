<x-app-layout>
    <div class="min-h-screen bg-slate-100 py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100 p-8">
                
                <div class="mb-6 border-b pb-4">
                    <span class="text-xs font-bold text-[#0b2545] uppercase tracking-wider">Oferta Académica</span>
                    <h2 class="text-xl font-bold text-slate-800 mt-1">Crear Nuevo Programa Académico</h2>
                    <p class="text-sm text-slate-500">Configura los datos generales y la facultad correspondiente.</p>
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

                <form method="POST" action="{{ route('admin.programas.store') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Código del Programa *</label>
                        <input type="text" name="codigo" value="{{ old('codigo') }}" required placeholder="Ej. ING-INF"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Nombre del Programa *</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}" required placeholder="Ej. Ingeniería Informática"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Facultad *</label>
                        <select name="facultad" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm">
                            <option value="">Seleccione una facultad...</option>
                            <option value="Facultad de Ciencias Económicas y Administrativas" {{ old('facultad') === 'Facultad de Ciencias Económicas y Administrativas' ? 'selected' : '' }}>Facultad de Ciencias Económicas y Administrativas</option>
                            <option value="Facultad de Ciencias Aplicadas y de la Salud" {{ old('facultad') === 'Facultad de Ciencias Aplicadas y de la Salud' ? 'selected' : '' }}>Facultad de Ciencias Aplicadas y de la Salud</option>
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
                        <a href="{{ route('programas.index') }}" class="text-sm font-semibold text-slate-600 hover:text-slate-900 transition">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-6 py-2.5 rounded-xl shadow-md text-sm transition">
                            Guardar Programa
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>