<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Panel de Administración General') }}
            </h2>
            <span class="px-3 py-1 text-xs font-semibold text-indigo-700 bg-indigo-100 rounded-full">
                Modo Administrador
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Mensajes de alerta o éxito -->
            @if(session('success'))
                <div class="mb-4 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-r shadow-sm" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-4 bg-rose-100 border-l-4 border-rose-500 text-rose-700 p-4 rounded-r shadow-sm" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            <!-- Tarjetas de Estadísticas (Grid responsivo) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Tarjeta 1: Total Usuarios -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-b-4 border-indigo-500">
                    <div class="text-gray-500 text-sm font-medium uppercase tracking-wider">Total de Usuarios</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900">{{ $totalUsers }}</div>
                </div>

                <!-- Tarjeta 2: Administradores -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-b-4 border-blue-500">
                    <div class="text-gray-500 text-sm font-medium uppercase tracking-wider">Administradores</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900">{{ $totalAdmins }}</div>
                </div>

                <!-- Tarjeta 3: Usuarios Normales -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-b-4 border-emerald-500">
                    <div class="text-gray-500 text-sm font-medium uppercase tracking-wider">Usuarios Estándar</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900">{{ $totalStandardUsers }}</div>
                </div>
            </div>

            <!-- Sección principal: Bienvenida y Acciones Rápidas -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col md:flex-row justify-between items-center pb-6 border-b border-gray-200">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Bienvenido, {{ Auth::user()->name }}</h3>
                            <p class="text-sm text-gray-500">Desde aquí puedes supervisar y gestionar el acceso de los usuarios al sistema.</p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <!-- Botón para crear usuarios que apunta a la ruta que configuramos -->
                            <a href="{{ route('admin.users.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                + Crear Nuevo Usuario
                            </a>
                        </div>
                    </div>

                    <!-- Tabla de actividad reciente -->
                    <div class="mt-6">
                        <div class="flex justify-between items-center mb-4">
                            <h4 class="text-md font-semibold text-gray-700">Últimos registros en la plataforma</h4>
                            <a href="{{ route('admin.users.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-900">Ver todos los usuarios &rarr;</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Correo</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rol</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Registrado</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($users as $u)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $u->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $u->email }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $u->role === 'admin' ? 'bg-purple-100 text-purple-800' : 'bg-green-100 text-green-800' }}">
                                                    {{ ucfirst($u->role) }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $u->created_at->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>