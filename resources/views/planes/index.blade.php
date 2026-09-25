<x-app-layout>
    <div class="min-h-screen bg-slate-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <span class="text-xs font-extrabold text-[#0b2545] uppercase tracking-wider">Estructura Curricular</span>
                    <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Planes de Estudio</h2>
                    <p class="text-sm text-slate-500 mt-1">Consulta los planes académicos vigentes, número de semestres y mallas de asignaturas.</p>
                </div>
                
                <div class="flex items-center gap-3">
                    <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" class="text-xs font-bold text-[#0b2545] bg-white px-4 py-2.5 rounded-xl shadow-sm border border-gray-200 transition">
                        &larr; Volver al Panel
                    </a>

                    @if(Auth::user()->role === 'admin')
                        <a href="{{ route('admin.planes.create') }}" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-extrabold px-4 py-2.5 rounded-xl shadow-md text-sm flex items-center space-x-2 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            <span>Crear Plan de Estudio</span>
                        </a>
                    @endif
                </div>
            </div>

            @if(session('success'))
                <div class="mb-6 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-xl shadow-sm text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl rounded-3xl border border-gray-100 p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-slate-50">
                                <th class="px-6 py-3 text-left text-xs font-extrabold text-slate-500 uppercase tracking-wider">Código Programa</th>
                                <th class="px-6 py-3 text-left text-xs font-extrabold text-slate-500 uppercase tracking-wider">Programa Académico</th>
                                <th class="px-6 py-3 text-center text-xs font-extrabold text-slate-500 uppercase tracking-wider">Tipo</th>
                                <th class="px-6 py-3 text-center text-xs font-extrabold text-slate-500 uppercase tracking-wider">Semestres</th>
                                <th class="px-6 py-3 text-center text-xs font-extrabold text-slate-500 uppercase tracking-wider">Asignaturas</th>
                                <th class="px-6 py-3 text-left text-xs font-extrabold text-slate-500 uppercase tracking-wider">Estado</th>
                                <th class="px-6 py-3 text-right text-xs font-extrabold text-slate-500 uppercase tracking-wider">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($planes as $p)
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-extrabold text-[#0b2545]">{{ $p->programa->codigo ?? 'N/A' }}</td>
                                    <td class="px-6 py-4 text-sm font-bold text-slate-800">{{ $p->programa->nombre ?? 'Programa no asignado' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm">
                                        <span class="bg-indigo-50 text-indigo-800 px-3 py-1 rounded-full text-xs font-bold border border-indigo-100">
                                            {{ $p->tipo }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-extrabold text-slate-700">{{ $p->semestres }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-extrabold text-slate-700">
                                        <span class="bg-amber-50 text-amber-800 px-2.5 py-1 rounded-full text-xs border border-amber-200">
                                            {{ $p->asignaturas_count }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full {{ $p->estado === 'Activo' ? 'bg-emerald-100 text-emerald-800' : 'bg-slate-100 text-slate-700' }}">
                                            {{ $p->estado }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
                                            <a href="{{ route('planes.show', $p->id) }}" class="bg-blue-50 text-[#0b2545] hover:bg-blue-100 px-3 py-1.5 rounded-xl text-xs font-bold">Ver Malla</a>
                                            @if(Auth::user()->role === 'admin')
                                                <a href="{{ route('admin.planes.edit', $p->id) }}" class="bg-indigo-50 text-indigo-900 hover:bg-indigo-100 px-3 py-1.5 rounded-xl text-xs font-bold">Editar</a>
                                                <form action="{{ route('admin.planes.destroy', $p->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este plan de estudio?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-rose-50 text-rose-600 hover:bg-rose-100 px-3 py-1.5 rounded-xl text-xs font-bold">Eliminar</button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-12 text-center text-sm text-slate-400">
                                        No hay planes de estudio registrados en el sistema.
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