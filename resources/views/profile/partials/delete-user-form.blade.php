<section class="space-y-6">
    <header class="border-b pb-4 mb-6">
        <h2 class="text-lg font-bold text-slate-900">
            {{ __('Eliminar Cuenta') }}
        </h2>
        <p class="mt-1 text-sm text-slate-500">
            {{ __('Una vez que tu cuenta sea eliminada, todos sus recursos y datos serán borrados permanentemente.') }}
        </p>
    </header>

    <button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-rose-600 hover:bg-rose-700 text-white font-bold px-5 py-2.5 rounded-xl shadow-md text-sm transition"
    >{{ __('Eliminar Cuenta') }}</button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-bold text-slate-900">
                {{ __('¿Estás seguro de que deseas eliminar tu cuenta?') }}
            </h2>

            <p class="mt-2 text-sm text-slate-600">
                {{ __('Esta acción es irreversible. Por favor ingresa tu contraseña para confirmar que deseas eliminar permanentemente tu cuenta.') }}
            </p>

            <div class="mt-4">
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5">Contraseña Actual</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm"
                    placeholder="Ingresa tu contraseña"
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-rose-600 text-xs" />
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <button type="button" x-on:click="$dispatch('close')" class="bg-gray-200 hover:bg-gray-300 text-slate-800 font-bold px-4 py-2.5 rounded-xl text-sm transition">
                    {{ __('Cancelar') }}
                </button>

                <button type="submit" class="bg-rose-600 hover:bg-rose-700 text-white font-bold px-5 py-2.5 rounded-xl text-sm transition">
                    {{ __('Sí, Eliminar Cuenta') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>