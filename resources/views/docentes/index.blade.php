<x-app-layout>
    <div class="min-h-screen bg-slate-100 py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Encabezado de la Sección -->
            <div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <!-- Cambiado de morado a azul institucional -->
                    <span class="text-xs font-bold text-[#0b2545] uppercase tracking-wider">Módulo Académico</span>
                    <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Directorio de Docentes</h2>
                    <p class="text-sm text-slate-500 mt-1">Consulta, búsqueda y administración del personal docente de la institución.</p>
                </div>
                
                <a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" class="text-xs font-semibold text-[#0b2545] hover:text-slate-900 bg-white px-4 py-2 rounded-xl shadow-sm border border-gray-200 transition">
                    &larr; Volver al Panel
                </a>
            </div>

            <!-- Alerta de éxito -->
            @if(session('success'))
                <div class="mb-6 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-r shadow-sm">
                    <p class="text-sm font-medium">{{ session('success') }}</p>
                </div>
            @endif

            <!-- Tarjeta Principal del Listado -->
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100 p-6">
                
                <!-- Barra de Búsqueda y Botón de Crear -->
                <div class="flex flex-col md:flex-row justify-between items-center pb-6 border-b border-gray-100 gap-4">
                    
                    <!-- Buscador -->
                    <form method="GET" action="{{ route('docentes.index') }}" class="w-full md:w-1/2 flex items-center space-x-2">
                        <input type="text" name="busqueda" value="{{ request('busqueda') }}" placeholder="Buscar por nombre o número de documento..." 
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] focus:border-[#0b2545] text-sm" />
                        <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-5 py-2.5 rounded-xl shadow-md text-sm transition">
                            Buscar
                        </button>
                        @if(request('busqueda'))
                            <a href="{{ route('docentes.index') }}" class="text-xs text-slate-500 hover:underline px-2">Limpiar</a>
                        @endif
                    </form>

                    <!-- Botón Nuevo Docente (Solo Administrador) -->
                    @if(auth()->user()->role === 'admin')
                        <div>
                            <a href="{{ route('admin.docentes.create') }}" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold px-4 py-2.5 rounded-xl shadow-md text-sm flex items-center space-x-2 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                <span>Nuevo Docente</span>
                            </a>
                        </div>
                    @endif
                </div>

                <!-- Tabla de Resultados -->
                <div class="overflow-x-auto mt-6">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-slate-50">
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Documento</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Nombre Completo</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Correo Institucional</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Celular</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Vinculación</th>
                                @if(auth()->user()->role === 'admin')
                                    <th class="px-6 py-3 text-right text-xs font-bold text-slate-500 uppercase tracking-wider">Acciones</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($docentes as $docente)
                                <tr class="hover:bg-slate-50/80 transition">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-slate-800">{{ $docente->documento }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $docente->nombre }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">{{ $docente->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">{{ $docente->celular }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-bold rounded-full 
                                            {{ $docente->vinculacion === 'tiempo completo' ? 'bg-blue-100 text-blue-900' : '' }}
                                            {{ $docente->vinculacion === 'medio tiempo' ? 'bg-sky-100 text-sky-900' : '' }}
                                            {{ $docente->vinculacion === 'hora catedra' ? 'bg-amber-100 text-amber-900' : '' }}
                                            {{ $docente->vinculacion === 'pendiente' ? 'bg-gray-100 text-gray-800' : '' }}">
                                            {{ ucwords($docente->vinculacion) }}
                                        </span>
                                    </td>
                                    @if(auth()->user()->role === 'admin')
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex justify-end space-x-2">
                                                <a href="{{ route('admin.docentes.edit', $docente->id) }}" class="bg-indigo-50 text-[#0b2545] hover:bg-indigo-100 px-3 py-1 rounded-lg text-xs font-bold">Editar</a>
                                                <form action="{{ route('admin.docentes.destroy', $docente->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este docente?');">
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
                                    <td colspan="{{ auth()->user()->role === 'admin' ? 6 : 5 }}" class="px-6 py-12 text-center text-sm text-slate-400">
                                        No se encontraron docentes registrados o que coincidan con la búsqueda.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Paginación -->
                <div class="mt-6">
                    {{ $docentes->appends(request()->query())->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>