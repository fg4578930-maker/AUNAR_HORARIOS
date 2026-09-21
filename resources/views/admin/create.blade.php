<x-app-layout>
    <div class="min-h-screen bg-slate-100 py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100 p-8">
                
                <!-- Encabezado de la Tarjeta -->
                <div class="mb-6 border-b pb-4">
                    <span class="text-xs font-bold text-[#0b2545] uppercase tracking-wider">Seguridad y Accesos</span>
                    <h2 class="text-xl font-bold text-slate-800 mt-1">Crear Nuevo Usuario</h2>
                    <p class="text-sm text-slate-500">Registra una nueva cuenta de administrador o usuario estándar en el sistema.</p>
                </div>

                <!-- Manejo de Errores -->
                @if ($errors->any())
                    <div class="mb-6 bg-rose-100 border-l-4 border-rose-500 text-rose-700 p-4 rounded-r text-sm shadow-sm">
                        <ul class="space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Formulario de Creación -->
                <form method="POST" action="{{ route('admin.users.store') }}" class="space-y-5">
                    @csrf

                    <!-- Nombre Completo -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Nombre Completo *</label>
                        <input type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Ej. Juan Pérez"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] focus:border-[#0b2545] text-sm" />
                    </div>

                    <!-- Correo Electrónico -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Correo Electrónico *</label>
                        <input type="email" name="email" value="{{ old('email') }}" required placeholder="correo@aunarvillavicencio.edu.co"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] focus:border-[#0b2545] text-sm" />
                    </div>

                    <!-- Rol en el Sistema -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Rol en el Sistema *</label>
                        <select name="role" required 
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] focus:border-[#0b2545] text-sm">
                            <option value="user" {{ old('role') === 'user' ? 'selected' : '' }}>Usuario Estándar</option>
                            <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Administrador</option>
                        </select>
                    </div>

                    <!-- Contraseña Temporal -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Contraseña Temporal *</label>
                        <input type="password" name="password" required placeholder="Mínimo 8 caracteres"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] focus:border-[#0b2545] text-sm" />
                    </div>

                    <!-- Botones de Acción -->
                    <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-100">
                        <a href="{{ route('admin.users.index') }}" class="text-sm font-semibold text-slate-600 hover:text-slate-900 transition">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-6 py-2.5 rounded-xl shadow-md text-sm transition">
                            Guardar Usuario
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>