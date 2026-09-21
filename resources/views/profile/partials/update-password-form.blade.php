<section>
    <header class="border-b pb-4 mb-6">
        <h2 class="text-lg font-bold text-slate-900">
            {{ __('Actualizar Contraseña') }}
        </h2>
        <p class="mt-1 text-sm text-slate-500">
            {{ __('Asegúrate de que tu cuenta esté usando una contraseña segura para mantener la protección del sistema.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-5">
        @csrf
        @method('put')

        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Contraseña Actual *</label>
            <input type="password" id="update_password_current_password" name="current_password" autocomplete="current-password"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] focus:border-[#0b2545] text-sm" />
            <x-input-error class="mt-2 text-rose-600 text-xs" :messages="$errors->updatePassword->get('current_password')" />
        </div>

        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Nueva Contraseña *</label>
            <input type="password" id="update_password_password" name="password" autocomplete="new-password"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] focus:border-[#0b2545] text-sm" />
            <x-input-error class="mt-2 text-rose-600 text-xs" :messages="$errors->updatePassword->get('password')" />
        </div>

        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Confirmar Nueva Contraseña *</label>
            <input type="password" id="update_password_password_confirmation" name="password_confirmation" autocomplete="new-password"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] focus:border-[#0b2545] text-sm" />
            <x-input-error class="mt-2 text-rose-600 text-xs" :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>

        <div class="flex items-center gap-4 pt-2">
            <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-6 py-2.5 rounded-xl shadow-md text-sm transition">
                {{ __('Actualizar Contraseña') }}
            </button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-emerald-600 font-bold"
                >{{ __('¡Contraseña actualizada!') }}</p>
            @endif
        </div>
    </form>
</section>