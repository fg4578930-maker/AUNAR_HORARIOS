<x-app-layout>
    <div class="min-h-screen bg-slate-100 py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100 p-8">
                
                <div class="mb-6 border-b pb-4">
                    <span class="text-xs font-bold text-[#0b2545] uppercase tracking-wider">Calendario Académico</span>
                    <h2 class="text-xl font-bold text-slate-800 mt-1">Editar Periodo: {{ $periodo->periodo }} - {{ $periodo->anio }}</h2>
                    <p class="text-sm text-slate-500">Actualiza las fechas y el estado del periodo académico.</p>
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

                <form method="POST" action="{{ route('admin.periodos.update', $periodo->id) }}" class="space-y-5">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Periodo *</label>
                        <select name="periodo" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm">
                            <option value="Semestre 1" {{ $periodo->periodo === 'Semestre 1' ? 'selected' : '' }}>Semestre 1</option>
                            <option value="Semestre 2" {{ $periodo->periodo === 'Semestre 2' ? 'selected' : '' }}>Semestre 2</option>
                            <option value="Periodo Especial" {{ $periodo->periodo === 'Periodo Especial' ? 'selected' : '' }}>Periodo Especial / Vacacional</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Año (Vigencia) *</label>
                        <input type="number" name="anio" value="{{ old('anio', $periodo->anio) }}" required min="2024" max="2035"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" />
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Fecha de Inicio *</label>
                            <input type="date" name="fecha_inicio" value="{{ old('fecha_inicio', $periodo->fecha_inicio) }}" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" />
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Fecha de Fin *</label>
                            <input type="date" name="fecha_fin" value="{{ old('fecha_fin', $periodo->fecha_fin) }}" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" />
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Estado del Periodo *</label>
                        <select name="estado" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm">
                            <option value="Activo" {{ $periodo->estado === 'Activo' ? 'selected' : '' }}>Activo</option>
                            <option value="Inactivo" {{ $periodo->estado === 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                            <option value="Finalizado" {{ $periodo->estado === 'Finalizado' ? 'selected' : '' }}>Finalizado</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-100">
                        <a href="{{ route('periodos.index') }}" class="text-sm font-semibold text-slate-600 hover:text-slate-900 transition">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-6 py-2.5 rounded-xl shadow-md text-sm transition">
                            Actualizar Periodo
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>