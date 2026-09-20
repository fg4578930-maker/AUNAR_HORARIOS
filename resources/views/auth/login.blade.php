<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center bg-slate-100 py-12 px-4 sm:px-6 lg:px-8">
        
        <!-- Encabezado superior con el logo institucional y textos -->
        <div class="text-center mb-6">
            <div class="flex justify-center mb-3">
                <img src="{{ asset('images/logo-aunar.png') }}" alt="Logo AUNAR" class="h-20 w-auto object-contain">
            </div>
            <h1 class="text-2xl font-bold text-slate-800 tracking-tight">
                AUNAR Villavicencio
            </h1>
            <p class="text-sm text-slate-500 font-medium mt-0.5">
                Sistema de Gestión de Horarios
            </p>
        </div>

        <!-- Tarjeta Central con la barra amarilla superior institucional -->
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            <!-- Barra superior amarilla -->
            <div class="h-2 bg-yellow-400 w-full"></div>

            <div class="p-8">
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-slate-800">Iniciar sesión</h2>
                    <p class="text-sm text-slate-500 mt-1">Ingresa tus datos para acceder al sistema.</p>
                </div>

                <!-- Estado de sesión o alertas -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Formulario -->
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <!-- Correo Electrónico -->
                    <div>
                        <label for="email" class="block text-xs font-semibold text-slate-700 mb-1">Correo electrónico</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username" 
                            class="block w-full px-4 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-900 focus:border-indigo-900 sm:text-sm transition" 
                            placeholder="ejemplo@aunar.edu.co" />
                        <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <label for="password" class="block text-xs font-semibold text-slate-700 mb-1">Contraseña</label>
                        <input id="password" name="password" type="password" required autocomplete="current-password" 
                            class="block w-full px-4 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-900 focus:border-indigo-900 sm:text-sm transition" 
                            placeholder="Ingresa tu contraseña" />
                        <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
                    </div>

                    <!-- Recordarme -->
                    <div class="flex items-center pt-1">
                        <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 text-indigo-900 focus:ring-indigo-950 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-slate-600">Recordarme</label>
                    </div>

                    <!-- ¿Olvidaste tu contraseña? -->
                    @if (Route::has('password.request'))
                        <div class="pt-1">
                            <a href="{{ route('password.request') }}" class="text-sm font-medium text-indigo-900 hover:underline">¿Olvidaste tu contraseña?</a>
                        </div>
                    @endif

                    <!-- Botón de Iniciar Sesión -->
                    <div class="pt-2">
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-md text-sm font-bold text-white bg-[#0b2545] hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-900 transition duration-150 tracking-wider">
                            INICIAR SESIÓN
                        </button>
                    </div>
                </form>

                <!-- Pie de página dentro de la tarjeta -->
                <div class="mt-6 pt-4 border-t border-gray-100 text-center">
                    <p class="text-xs text-slate-400 font-medium">Plataforma institucional de gestión académica</p>
                </div>
            </div>
        </div>

        <!-- Copyright inferior -->
        <div class="mt-6 text-center">
            <p class="text-xs text-slate-500 font-medium">&copy; 2026 AUNAR &mdash; Villavicencio</p>
        </div>

    </div>
</x-guest-layout>