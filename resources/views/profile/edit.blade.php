<x-app-layout>
    <div class="min-h-screen bg-slate-100 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Encabezado de la Sección -->
            <div class="mb-2 px-4 sm:px-0">
                <span class="text-xs font-bold text-[#0b2545] uppercase tracking-wider">Configuración de Cuenta</span>
                <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Mi Perfil</h2>
                <p class="text-sm text-slate-500 mt-1">Administra la información de tu cuenta, credenciales de seguridad y opciones de acceso.</p>
            </div>

            <!-- Tarjeta 1: Información del Perfil -->
            <div class="p-6 sm:p-8 bg-white shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Tarjeta 2: Actualizar Contraseña -->
            <div class="p-6 sm:p-8 bg-white shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Tarjeta 3: Eliminar Cuenta -->
            <div class="p-6 sm:p-8 bg-white shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>