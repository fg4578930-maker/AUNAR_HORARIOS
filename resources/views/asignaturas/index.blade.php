<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-xl text-[#0b2545] leading-tight">
            {{ __('Asignaturas Académicas') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 p-6">
                
                @if(session('success'))
                    <div class="mb-6 bg-yellow-50 border-l-4 border-yellow-400 text-slate-900 p-4 rounded-r shadow-sm font-semibold">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Formulario de Filtros Jerárquicos -->
                <form method="GET" action="{{ route('asignaturas.index') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6 bg-slate-50 p-4 rounded-xl border border-gray-100">
                    <div>
                        <label class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-1">Programa Académico</label>
                        <select name="programa_id" class="w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm">
                            <option value="">Todos los programas</option>
                            @foreach($programas as $prog)
                                <option value="{{ $prog->id }}" {{ request('programa_id') == $prog->id ? 'selected' : '' }}>{{ $prog->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-1">Plan de Estudios</label>
                        <select name="plan_estudios" class="w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm">
                            <option value="">Todos</option>
                            <option value="Antiguo" {{ request('plan_estudios') == 'Antiguo' ? 'selected' : '' }}>Antiguo</option>
                            <option value="Nuevo" {{ request('plan_estudios') == 'Nuevo' ? 'selected' : '' }}>Nuevo</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-1">Semestre</label>
                        <select name="semestre" class="w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm">
                            <option value="">Todos</option>
                            @for($i = 1; $i <= 9; $i++)
                                <option value="{{ $i }}" {{ request('semestre') == $i ? 'selected' : '' }}>Semestre {{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="flex items-end space-x-2">
                        <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-extrabold py-2 px-4 rounded-xl shadow transition text-sm w-full">
                            Filtrar
                        </button>
                        <a href="{{ route('asignaturas.index') }}" class="bg-slate-200 hover:bg-slate-300 text-slate-700 font-extrabold py-2 px-4 rounded-xl shadow transition text-sm text-center">
                            Limpiar
                        </a>
                    </div>
                </form>

                <!-- Botón de Creación (Solo Admin) -->
                @if(auth()->user()->role === 'admin')
                    <div class="mb-6 flex justify-end">
                        <a href="{{ route('admin.asignaturas.create') }}" class="inline-flex items-center space-x-2 bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-extrabold py-2.5 px-4 rounded-xl shadow transition text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            <span>Crear Nueva Asignatura</span>
                        </a>
                    </div>
                @endif

                <!-- Tabla de Asignaturas -->
                <div class="overflow-x-auto rounded-xl border border-gray-100">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-[#0b2545] text-white text-left text-xs font-extrabold uppercase tracking-wider">
                                <th class="px-6 py-3.5">Código</th>
                                <th class="px-6 py-3.5">Asignatura</th>
                                <th class="px-6 py-3.5">Programa</th>
                                <th class="px-6 py-3.5 text-center">Plan</th>
                                <th class="px-6 py-3.5 text-center">Semestre</th>
                                <th class="px-6 py-3.5 text-center">Créditos</th>
                                <th class="px-6 py-3.5 text-center">Estado</th>
                                <th class="px-6 py-3.5 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($asignaturas as $asig)
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-[#0b2545]">{{ $asig->codigo }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-slate-900">{{ $asig->nombre }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600">{{ $asig->programa->nombre ?? 'N/A' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-bold text-slate-700">
                                        <span class="px-2.5 py-1 rounded-full text-xs font-bold {{ $asig->plan_estudios == 'Nuevo' ? 'bg-blue-100 text-blue-800' : 'bg-amber-100 text-amber-800' }}">
                                            {{ $asig->plan_estudios }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-bold text-slate-700">Semestre {{ $asig->semestre }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-bold text-slate-700">{{ $asig->creditos }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm">
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-extrabold rounded-full {{ $asig->estado == 'Activo' ? 'bg-emerald-100 text-emerald-800' : 'bg-red-100 text-red-800' }}">
                                            {{ $asig->estado }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="{{ route('asignaturas.show', $asig->id) }}" class="text-[#0b2545] hover:text-blue-700 font-bold bg-slate-100 hover:bg-slate-200 px-3 py-1 rounded-lg transition text-xs">Ver</a>

                                            @if(auth()->user()->role === 'admin')
                                                <a href="{{ route('admin.asignaturas.edit', $asig->id) }}" class="text-yellow-700 hover:text-yellow-800 font-bold bg-yellow-50 hover:bg-yellow-100 px-3 py-1 rounded-lg transition text-xs">Editar</a>
                                                
                                                <form action="{{ route('admin.asignaturas.destroy', $asig->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de eliminar esta asignatura?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 font-bold bg-red-50 hover:bg-red-100 px-3 py-1 rounded-lg transition text-xs">Eliminar</button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-6 py-8 text-center text-slate-500 font-medium">
                                        No se encontraron asignaturas con los filtros seleccionados.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $asignaturas->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>