<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-xl text-[#0b2545] leading-tight">
            {{ __('Programas Académicos') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 p-6">
                
                @if(session('success'))
                    <div class="mb-6 bg-yellow-50 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded-r shadow-sm font-medium">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Cabecera de la sección con botón de Nuevo Programa exclusivo para Admin -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4 border-b border-gray-100 pb-4">
                    <div>
                        <h3 class="text-lg font-extrabold text-[#0b2545]">Listado Institucional</h3>
                        <p class="text-xs text-slate-500">Gestión de la oferta académica y planes de estudio</p>
                    </div>

                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.programas.create') }}" class="inline-flex items-center space-x-2 bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-extrabold py-2.5 px-4 rounded-xl shadow transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            <span>Crear Nuevo Programa</span>
                        </a>
                    @endif
                </div>

                <!-- Tabla institucional -->
                <div class="overflow-x-auto rounded-xl border border-gray-100">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-[#0b2545] text-white text-left text-xs font-extrabold uppercase tracking-wider">
                                <th class="px-6 py-3.5">Código</th>
                                <th class="px-6 py-3.5">Nombre</th>
                                <th class="px-6 py-3.5">Facultad</th>
                                <th class="px-6 py-3.5 text-center">Plan de Estudios</th>
                                <th class="px-6 py-3.5 text-center">Estado</th>
                                <th class="px-6 py-3.5 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($programas as $programa)
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-[#0b2545]">{{ $programa->codigo }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-slate-900">{{ $programa->nombre }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600">{{ $programa->facultad }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-bold text-slate-700">{{ $programa->plan_estudios }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm">
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-extrabold rounded-full {{ $programa->estado == 'Activo' ? 'bg-emerald-100 text-emerald-800' : 'bg-red-100 text-red-800' }}">
                                            {{ $programa->estado }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <div class="flex items-center justify-center space-x-3">
                                            <!-- Ver detalle (Disponible para todos) -->
                                            <a href="{{ route('programas.show', $programa->id) }}" class="text-[#0b2545] hover:text-blue-700 font-bold bg-slate-100 hover:bg-slate-200 px-3 py-1 rounded-lg transition">Ver</a>

                                            <!-- Acciones exclusivas del Administrador -->
                                            @if(auth()->user()->role === 'admin')
                                                <a href="{{ route('admin.programas.edit', $programa->id) }}" class="text-yellow-700 hover:text-yellow-800 font-bold bg-yellow-50 hover:bg-yellow-100 px-3 py-1 rounded-lg transition">Editar</a>
                                                
                                                <form action="{{ route('admin.programas.destroy', $programa->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de eliminar este programa académico?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 font-bold bg-red-50 hover:bg-red-100 px-3 py-1 rounded-lg transition">Eliminar</button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>