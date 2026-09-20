<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nuevo Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 max-w-xl mx-auto">
                    
                    <!-- Mostrar errores de validación si los hay -->
                    @if ($errors->any())
                        <div class="mb-4 bg-rose-100 border-l-4 border-rose-500 text-rose-700 p-4 rounded-r shadow-sm">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>- {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Formulario de Creación -->
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-4">
                            <label for="name" class="block font-medium text-sm text-gray-700">Nombre Completo</label>
                            <input id="name" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" type="text" name="name" value="{{ old('name') }}" required autofocus />
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mb-4">
                            <label for="email" class="block font-medium text-sm text-gray-700">Correo Electrónico</label>
                            <input id="email" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" type="email" name="email" value="{{ old('email') }}" required />
                        </div>

                        <!-- Rol del Usuario -->
                        <div class="mb-4">
                            <label for="role" class="block font-medium text-sm text-gray-700">Rol en el Sistema</label>
                            <select id="role" name="role" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                <option value="user">Usuario Estándar</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-4">
                            <label for="password" class="block font-medium text-sm text-gray-700">Contraseña Temporal</label>
                            <input id="password" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password" required />
                        </div>

                        <!-- Botones de Acción -->
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-600 underline hover:text-gray-900 mr-4">
                                Cancelar
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-950 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Guardar Usuario
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>