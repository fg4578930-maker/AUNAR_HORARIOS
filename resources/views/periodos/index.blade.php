<x-app-layout>
    <div class="min-h-screen bg-slate-100 py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Encabezado -->
            <div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <span class="text-xs font-bold text-[#0b2545] uppercase tracking-wider">Calendario Académico</span>
                    <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Periodos Académicos</h2>
                    <p class="text-sm text-slate-500 mt-1">Consulta los semestres, vigencias y fechas de actividad institucional.</p>
                </div>
                
                <div class="flex items-center gap-3">
                    <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" class="text-xs font-semibold text-[#0b2545] hover:text-slate-900 bg-white px-4 py-2.5 rounded-xl shadow-sm border border-gray-200 transition">
                        &larr; Volver al Panel
                    </a>

                    @if(Auth::user()->role === 'admin')
                        <a href="{{ route('admin.periodos.create') }}" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold px-4 py-2.5 rounded-xl shadow-md text-sm flex items-center space-x-2 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            <span>Crear Nuevo Periodo</span>
                        </a>
                    @endif
                </div>
            </div>

            <!-- Alertas -->
            @if(session('success'))
                <div class="mb-6 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-r shadow-sm text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tarjeta y Tabla -->
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100 p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-slate-50">
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Periodo</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Año (Vigencia)</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Fecha de Inicio</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Fecha de Fin</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Estado</th>
                                @if(Auth::user()->role === 'admin')
                                    <th class="px-6 py-3 text-right text-xs font-bold text-slate-500 uppercase tracking-wider">Acciones</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($periodos as $p)
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-800">{{ $p->periodo }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600">{{ $p->anio }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600">{{ \Carbon\Carbon::parse($p->fecha_inicio)->format('d/m/Y') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600">{{ \Carbon\Carbon::parse($p->fecha_fin)->format('d/m/Y') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-bold rounded-full {{ $p->estado === 'Activo' ? 'bg-emerald-100 text-emerald-800' : 'bg-slate-100 text-slate-700' }}">
                                            {{ $p->estado }}
                                        </span>
                                    </td>
                                    @if(Auth::user()->role === 'admin')
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex justify-end space-x-2">
                                                <a href="{{ route('admin.periodos.edit', $p->id) }}" class="bg-indigo-50 text-[#0b2545] hover:bg-indigo-100 px-3 py-1 rounded-lg text-xs font-bold">Editar</a>
                                                <form action="{{ route('admin.periodos.destroy', $p->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este periodo académico?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-rose-50 text-rose-600 hover:bg-rose-100 px-3 py-1 rounded-lg text-xs font-bold">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ Auth::user()->role === 'admin' ? 6 : 5 }}" class="px-6 py-12 text-center text-sm text-slate-400">
                                        No hay periodos académicos registrados en el sistema.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>