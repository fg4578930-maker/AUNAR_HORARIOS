<nav x-data="{ open: false }" class="bg-[#0b2545] border-b-4 border-yellow-400 shadow-md">
    <!-- Menú de Navegación Principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            
            <!-- Logo y Tipografía Institucional al lado -->
            <div class="flex items-center space-x-3">
                <a href="{{ auth()->check() && auth()->user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" class="flex items-center space-x-3 group">
                    <img src="{{ asset('images/logo-aunar.png') }}" alt="Logo AUNAR" class="h-14 w-auto object-contain">
                    <div class="flex flex-col">
                        <span class="text-[9px] font-medium text-indigo-200 uppercase tracking-widest leading-none">Corporación Universitaria</span>
                        <span class="text-xs font-black text-white tracking-wider mt-0.5">AUTÓNOMA DE NARIÑO</span>
                        <span class="text-[11px] font-extrabold text-yellow-400 tracking-widest mt-0.5">AUNAR VILLAVICENCIO</span>
                    </div>
                </a>
            </div>

            <!-- Enlaces Centrales según el rol -->
            <div class="hidden md:flex items-center space-x-2">
                @if(auth()->check() && auth()->user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}" class="px-3 py-1.5 rounded-full text-xs font-bold {{ request()->routeIs('admin.dashboard') ? 'bg-yellow-400 text-slate-900 shadow' : 'text-white hover:bg-white/10' }} transition">Panel Principal</a>
                    <a href="{{ route('docentes.index') }}" class="px-3 py-1.5 rounded-full text-xs font-medium {{ request()->routeIs('docentes.*') ? 'bg-yellow-400 text-slate-900 shadow font-bold' : 'text-white hover:bg-white/10' }} transition">Docentes</a>
                    <a href="{{ route('admin.users.index') }}" class="px-3 py-1.5 rounded-full text-xs font-medium {{ request()->routeIs('admin.users.*') ? 'bg-yellow-400 text-slate-900 shadow font-bold' : 'text-white hover:bg-white/10' }} transition">Gestión de Usuarios</a>
                @else
                    <a href="{{ route('dashboard') }}" class="px-3 py-1.5 rounded-full text-xs font-bold {{ request()->routeIs('dashboard') ? 'bg-yellow-400 text-slate-900 shadow' : 'text-white hover:bg-white/10' }} transition">Panel Principal</a>
                    <a href="{{ route('docentes.index') }}" class="px-3 py-1.5 rounded-full text-xs font-medium {{ request()->routeIs('docentes.*') ? 'bg-yellow-400 text-slate-900 shadow font-bold' : 'text-white hover:bg-white/10' }} transition">Docentes</a>
                @endif
            </div>

            <!-- Menú Desplegable de Usuario -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-1.5 bg-yellow-400 hover:bg-yellow-500 text-slate-900 rounded-full text-xs font-bold shadow transition focus:outline-none">
                            <div>{{ Auth::user()->name }} ({{ ucfirst(Auth::user()->role) }})</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1,1 0 011.414 0L10 10.586l3.293-3.293a1,1 0 111.414 1.414l-4 4a1,1 0 01-1.414 0l-4-4a1,1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Perfil') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Menú Móvil -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-yellow-400 hover:bg-indigo-950 focus:outline-none transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>