<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-[#0b2545] py-12 px-4 sm:px-6 lg:px-8">
        
        <!-- Tarjeta Central Institucional -->
        <div class="max-w-md w-full bg-white rounded-2xl shadow-2xl p-8 border-t-4 border-yellow-400">
            
            <!-- Logo y Encabezado -->
            <div class="text-center mb-6">
                <div class="flex justify-center mb-3">
                    <img src="{{ asset('images/logo-aunar.png') }}" alt="Logo AUNAR" class="h-16 w-auto object-contain">
                </div>
                <h2 class="text-xs font-bold text-yellow-600 uppercase tracking-widest">AUNAR VILLAVICENCIO</h2>
                <h1 class="text-xl font-extrabold text-slate-900 mt-1">¿Olvidaste tu contraseña?</h1>
                <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                    No hay problema. Solo indícanos tu correo electrónico y te enviaremos un enlace para que puedas restablecerla y elegir una nueva.
                </p>
            </div>

            <!-- Estado de la sesión / enlace enviado -->
            @if (session('status'))
                <div class="mb-4 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-3 rounded-r text-xs">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Errores -->
            @if ($errors->any())
                <div class="mb-4 bg-rose-100 border-l-4 border-rose-500 text-rose-700 p-3 rounded-r text-xs">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <!-- Formulario -->
            <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Correo Electrónico Institucional</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="correo@aunarvillavicencio.edu.co"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] focus:border-[#0b2545] text-sm" />
                </div>

                <div class="flex items-center justify-between pt-2">
                    <a href="{{ route('login') }}" class="text-xs font-semibold text-slate-600 hover:text-[#0b2545] transition">
                        &larr; Volver al Login
                    </a>

                    <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold px-5 py-2.5 rounded-xl shadow-md text-xs transition">
                        Enviar Enlace
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Pie institucional inferior -->
        <div class="mt-6 text-center text-indigo-200 text-xs">
            &copy; 2026 AUNAR Villavicencio &bull; Sistema de Gestión de Horarios
        </div>
    </div>
</x-guest-layout>