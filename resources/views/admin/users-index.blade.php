<x-app-layout>
    <div class="min-h-screen bg-slate-100 py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Encabezado de la Sección -->
            <div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <span class="text-xs font-bold text-[#0b2545] uppercase tracking-wider">Seguridad y Accesos</span>
                    <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Gestión de Todos los Usuarios</h2>
                    <p class="text-sm text-slate-500 mt-1">Administra las cuentas, credenciales y permisos de acceso al sistema.</p>
                </div>
                
                <a href="{{ route('admin.dashboard') }}" class="text-xs font-semibold text-[#0b2545] hover:text-slate-900 bg-white px-4 py-2 rounded-xl shadow-sm border border-gray-200 transition">
                    &larr; Volver al Panel Principal
                </a>
            </div>

            <!-- Alertas de éxito o error -->
            @if(session('success'))
                <div class="mb-6 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-r shadow-sm">
                    <p class="text-sm font-medium">{{ session('success') }}</p>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 bg-rose-100 border-l-4 border-rose-500 text-rose-700 p-4 rounded-r shadow-sm">
                    <p class="text-sm font-medium">{{ session('error') }}</p>
                </div>
            @endif

            <!-- Tarjeta Principal del Listado -->
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100 p-6">
                
                <!-- Barra superior con el botón de crear -->
                <div class="flex flex-col sm:flex-row justify-between items-center pb-6 border-b border-gray-100 gap-4">
                    <div>
                        <h3 class="text-base font-bold text-slate-800">Cuentas Registradas</h3>
                        <p class="text-xs text-slate-500">Listado general de usuarios con rol asignado en la plataforma.</p>
                    </div>

                    <div>
                        <a href="{{ route('admin.users.create') }}" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold px-4 py-2.5 rounded-xl shadow-md text-sm flex items-center space-x-2 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                            <span>Crear Nuevo Usuario</span>
                        </a>
                    </div>
                </div>

                <!-- Tabla de Usuarios -->
                <div class="overflow-x-auto mt-6">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-slate-50">
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Nombre</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Correo Electrónico</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Rol</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Registrado</th>
                                <th class="px-6 py-3 text-right text-xs font-bold text-slate-500 uppercase tracking-wider">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($users as $user)
                                <tr class="hover:bg-slate-50/80 transition">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-slate-800">{{ $user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-bold rounded-full {{ $user->role === 'admin' ? 'bg-indigo-100 text-indigo-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-indigo-50 text-[#0b2545] hover:bg-indigo-100 px-3 py-1 rounded-lg text-xs font-bold">Editar</a>
                                            
                                            @if(Auth::id() !== $user->id)
                                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este usuario?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-rose-50 text-rose-600 hover:bg-rose-100 px-3 py-1 rounded-lg text-xs font-bold">Eliminar</button>
                                                </form>
                                            @else
                                                <span class="text-xs text-slate-400 italic px-2">Cuenta actual</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-12 text-center text-sm text-slate-400">
                                        No hay usuarios registrados en el sistema.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Paginación si aplica -->
                @if(method_exists($users, 'links'))
                    <div class="mt-6">
                        {{ $users->links() }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>