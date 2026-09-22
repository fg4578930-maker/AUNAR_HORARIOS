<x-app-layout>
    <div class="min-h-screen bg-slate-100 py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Encabezado -->
            <div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <span class="text-xs font-bold text-[#0b2545] uppercase tracking-wider">Plan de Estudios</span>
                    <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Gestión de Asignaturas</h2>
                    <p class="text-sm text-slate-500 mt-1">Consulta el listado de materias, créditos y metodología académica.</p>
                </div>
                
                <div class="flex items-center gap-3">
                    <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" class="text-xs font-semibold text-[#0b2545] hover:text-slate-900 bg-white px-4 py-2.5 rounded-xl shadow-sm border border-gray-200 transition">
                        &larr; Volver al Panel
                    </a>

                    @if(Auth::user()->role === 'admin')
                        <a href="{{ route('admin.asignaturas.create') }}" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold px-4 py-2.5 rounded-xl shadow-md text-sm flex items-center space-x-2 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            <span>Nueva Asignatura</span>
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

            <!-- Barra de Búsqueda -->
            <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 mb-6">
                <form method="GET" action="{{ route('asignaturas.index') }}" class="flex flex-col sm:flex-row gap-3">
                    <div class="flex-1 relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </span>
                        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Buscar por nombre o código de la asignatura..." 
                            class="w-full pl-11 pr-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" />
                    </div>
                    <div class="flex gap-2">
                        <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-6 py-2.5 rounded-xl text-xs shadow transition">
                            Buscar
                        </button>
                        @if($search)
                            <a href="{{ route('asignaturas.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 font-bold px-4 py-2.5 rounded-xl text-xs flex items-center transition">
                                Limpiar
                            </a>
                        @endif
                    </div>
                </form>
            </div>

            <!-- Tarjeta y Tabla -->
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100 p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-slate-50">
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Código</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Nombre de la Asignatura</th>
                                <th class="px-6 py-3 text-center text-xs font-bold text-slate-500 uppercase tracking-wider">Créditos</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Tipo</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Estado</th>
                                @if(Auth::user()->role === 'admin')
                                    <th class="px-6 py-3 text-right text-xs font-bold text-slate-500 uppercase tracking-wider">Acciones</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($asignaturas as $a)
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-[#0b2545]">{{ $a->codigo }}</td>
                                    <td class="px-6 py-4 text-sm font-semibold text-slate-800">{{ $a->nombre }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-bold text-slate-700">
                                        <span class="bg-amber-50 text-amber-800 px-2.5 py-1 rounded-full text-xs border border-amber-200">
                                            {{ $a->creditos }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600">
                                        <span class="px-2.5 py-1 rounded-lg text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-200">
                                            {{ $a->tipo }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-bold rounded-full {{ $a->estado === 'Activo' ? 'bg-emerald-100 text-emerald-800' : 'bg-slate-100 text-slate-700' }}">
                                            {{ $a->estado }}
                                        </span>
                                    </td>
                                    @if(Auth::user()->role === 'admin')
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex justify-end space-x-2">
                                                <a href="{{ route('admin.asignaturas.edit', $a->id) }}" class="bg-indigo-50 text-[#0b2545] hover:bg-indigo-100 px-3 py-1 rounded-lg text-xs font-bold">Editar</a>
                                                <form action="{{ route('admin.asignaturas.destroy', $a->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta asignatura?');">
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
                                        No se encontraron asignaturas registradas.
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