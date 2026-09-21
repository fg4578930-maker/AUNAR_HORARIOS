<section>
    <header class="border-b pb-4 mb-6">
        <h2 class="text-lg font-bold text-slate-900">
            {{ __('Información del Perfil') }}
        </h2>
        <p class="mt-1 text-sm text-slate-500">
            {{ __("Actualiza la información de tu cuenta y dirección de correo electrónico.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-5">
        @csrf
        @method('patch')

        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Nombre Completo *</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] focus:border-[#0b2545] text-sm" />
            <x-input-error class="mt-2 text-rose-600 text-xs" :messages="$errors->get('name')" />
        </div>

        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Correo Electrónico *</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] focus:border-[#0b2545] text-sm" />
            <x-input-error class="mt-2 text-rose-600 text-xs" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Tu dirección de correo electrónico no está verificada.') }}

                        <button form="send-verification" class="underline text-sm text-indigo-600 hover:text-indigo-800 rounded-md focus:outline-none">
                            {{ __('Haz clic aquí para reenviar el correo de verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-emerald-600">
                            {{ __('Se ha enviado un nuevo enlace de verificación a tu correo electrónico.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4 pt-2">
            <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-6 py-2.5 rounded-xl shadow-md text-sm transition">
                {{ __('Guardar Cambios') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-emerald-600 font-bold"
                >{{ __('¡Guardado exitosamente!') }}</p>
            @endif
        </div>
    </form>
</section>