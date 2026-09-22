<x-app-layout>
    <div class="min-h-screen bg-slate-50 pb-16 pt-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Estilos personalizados para animaciones -->
            <style>
                @keyframes float {
                    0%, 100% { transform: translateY(0px); }
                    50% { transform: translateY(-8px); }
                }
                .animate-float {
                    animation: float 3s ease-in-out infinite;
                }
            </style>

            <!-- Alertas -->
            @if(session('success'))
                <div class="mb-6 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-xl shadow-sm text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <!-- BANNER HERO PRINCIPAL (Estilo Referencia) -->
            <div class="bg-white rounded-3xl shadow-xl p-8 mb-8 border border-gray-100 flex flex-col md:flex-row justify-between items-center relative overflow-hidden">
                <div class="max-w-3xl z-10">
                    <div class="inline-flex items-center space-x-2 bg-yellow-100 text-yellow-800 px-3.5 py-1 rounded-full text-xs font-extrabold mb-4 tracking-wider uppercase">
                        <span class="w-2 h-2 rounded-full bg-yellow-500 animate-pulse"></span>
                        <span>AUNAR • Panel de Administración General</span>
                    </div>
                    <h1 class="text-3xl font-extrabold text-[#0b2545] tracking-tight">Sistema Inteligente de Horarios</h1>
                    <p class="text-slate-500 text-sm mt-2 leading-relaxed">
                        Panel centralizado para la administración de la oferta académica, asignación de espacios de aprendizaje, gestión docente y optimización del tiempo institucional.
                    </p>
                    
                    <div class="flex flex-wrap items-center gap-3 mt-6">
                        <span class="bg-slate-100 text-slate-700 border border-slate-200 px-3 py-1 rounded-full text-xs font-bold">🟡 Periodo activo: 2026-2</span>
                        <span class="bg-emerald-50 text-emerald-800 border border-emerald-200 px-3 py-1 rounded-full text-xs font-bold">🟢 Estado del sistema: Operativo</span>
                        <span class="bg-blue-50 text-[#0b2545] border border-blue-100 px-3 py-1 rounded-full text-xs font-bold">📍 Sede: Villavicencio</span>
                    </div>
                </div>
                
                <!-- Aunardo Interactivo -->
                <div id="aunardo-container" class="relative flex flex-col items-center justify-center p-4 mt-6 md:mt-0 cursor-pointer group z-20" title="¡Haz clic en Aunardo!">
                    <div id="aunardo-speech" class="hidden absolute -top-12 bg-white text-[#0b2545] text-xs font-bold px-4 py-2.5 rounded-2xl shadow-2xl border-2 border-yellow-400 whitespace-nowrap transition-all duration-300 z-30">
                        ¡Bienvenido al panel de administración, jefe! 🎓
                        <div class="absolute bottom-[-6px] left-1/2 transform -translate-x-1/2 w-3 h-3 bg-white border-r-2 border-b-2 border-yellow-400 rotate-45"></div>
                    </div>
                    <img src="{{ asset('images/aunardo-bienvenida.png') }}" alt="Aunardo AUNAR" class="h-36 w-auto object-contain drop-shadow-[0_15px_15px_rgba(11,37,69,0.2)] animate-float transition duration-300 group-hover:scale-110">
                    <span class="text-[10px] font-extrabold text-[#0b2545] mt-2 bg-yellow-300 px-3 py-0.5 rounded-full shadow-sm">¡Haz clic!</span>
                </div>
            </div>

            <!-- SECCIÓN 1: CENTRO DE GESTIÓN ACADÉMICA (Tarjetas Trípticas: Blanco, Azul Oscuro, Amarillo) -->
            <div class="mb-10">
                <div class="flex items-center space-x-2 mb-6">
                    <div class="p-2 bg-yellow-400 rounded-xl text-slate-900 shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-extrabold text-[#0b2545]">Centro de Gestión Académica</h3>
                        <p class="text-xs text-slate-500">Planificación, administración de personal y control curricular</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- Tarjeta 1 (Blanca - Módulo Principal / Docentes) -->
                    <div class="interactive-module bg-white rounded-3xl shadow-lg p-6 border border-gray-100 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-xl">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-blue-50 text-[#0b2545] px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider border border-blue-100">⭐ Módulo Principal</span>
                                <span class="text-3xl font-extrabold text-[#0b2545]">{{ \App\Models\Docente::count() }}</span>
                            </div>
                            <h4 class="text-lg font-extrabold text-slate-900">Directorio de Docentes</h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Supervisa la asignación de profesores, tipos de vinculación (tiempo completo, cátedra) y datos institucionales.
                            </p>
                        </div>
                        <div class="pt-6 mt-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('docentes.index') }}" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">Gestionar</a>
                            <a href="{{ route('admin.docentes.create') }}" class="text-xs font-bold text-[#0b2545] hover:underline">+ Registrar Docente</a>
                        </div>
                    </div>

                    <!-- Tarjeta 2 (Azul Oscuro - Consulta General / Asignaturas) -->
                    <div class="interactive-module bg-[#0b2545] text-white rounded-3xl shadow-lg p-6 border border-indigo-900 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-xl">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-yellow-400 text-slate-900 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider">Consulta General</span>
                                <span class="text-3xl font-extrabold text-yellow-400">{{ \App\Models\Asignatura::count() }}</span>
                            </div>
                            <h4 class="text-lg font-extrabold text-white">Catálogo de Asignaturas</h4>
                            <p class="text-xs text-indigo-200 mt-2 leading-relaxed">
                                Visualización interactiva segmentada por código, créditos académicos y metodología teórica o práctica.
                            </p>
                        </div>
                        <div class="pt-6 mt-4 border-t border-indigo-900 flex items-center justify-between">
                            <a href="{{ route('asignaturas.index') }}" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold px-4 py-2 rounded-xl text-xs shadow transition">Ver Asignaturas</a>
                            <a href="{{ route('admin.asignaturas.create') }}" class="text-xs font-bold text-yellow-400 hover:underline">+ Nueva Asignatura</a>
                        </div>
                    </div>

                    <!-- Tarjeta 3 (Amarillo - Automatización / Programas) -->
                    <div class="interactive-module bg-yellow-400 text-slate-900 rounded-3xl shadow-lg p-6 border border-yellow-500 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-xl">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-slate-900 text-white px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider">Estructura</span>
                                <span class="text-3xl font-extrabold text-slate-900">{{ \App\Models\ProgramaAcademico::count() }}</span>
                            </div>
                            <h4 class="text-lg font-extrabold text-slate-900">Programas Académicos</h4>
                            <p class="text-xs text-slate-800 mt-2 leading-relaxed">
                                Organización de pregrados y facultades institucionales con conteo automático de planes de estudio.
                            </p>
                        </div>
                        <div class="pt-6 mt-4 border-t border-yellow-500/55 flex items-center justify-between">
                            <a href="{{ route('programas.index') }}" class="bg-slate-900 hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">Ver Programas</a>
                            <a href="{{ route('admin.programas.create') }}" class="text-xs font-bold text-slate-900 hover:underline">+ Crear Programa</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- SECCIÓN 2: RECURSOS Y CAPACIDAD ACADÉMICA (Tarjetas métricas al estilo de la referencia) -->
            <div class="mb-10">
                <div class="flex items-center space-x-2 mb-6">
                    <div class="p-2 bg-[#0b2545] rounded-xl text-white shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-extrabold text-[#0b2545]">Capacidad y Recursos Académicos</h3>
                        <p class="text-xs text-slate-500">Disponibilidad de infraestructura institucional y capital docente</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Métrica 1: Docentes -->
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xs font-extrabold text-slate-400 uppercase tracking-wider">Docentes</span>
                                <span class="p-2 bg-blue-50 text-[#0b2545] rounded-xl"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg></span>
                            </div>
                            <div class="text-3xl font-extrabold text-slate-900">{{ \App\Models\Docente::count() }}</div>
                            <p class="text-[11px] text-slate-400 mt-1">Profesores registrados</p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-gray-50 flex items-center justify-between text-xs">
                            <a href="{{ route('docentes.index') }}" class="font-bold text-[#0b2545] hover:underline flex items-center space-x-1"><span>Gestionar docentes</span> &rarr;</a>
                        </div>
                    </div>

                    <!-- Métrica 2: Periodos Académicos -->
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xs font-extrabold text-slate-400 uppercase tracking-wider">Periodos Académicos</span>
                                <span class="p-2 bg-amber-50 text-amber-800 rounded-xl"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></span>
                            </div>
                            <div class="text-3xl font-extrabold text-slate-900">{{ \App\Models\PeriodoAcademico::count() }}</div>
                            <p class="text-[11px] text-slate-400 mt-1">Ciclos de programación</p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-gray-50 flex items-center justify-between text-xs">
                            <a href="{{ route('periodos.index') }}" class="font-bold text-[#0b2545] hover:underline flex items-center space-x-1"><span>Gestionar periodos</span> &rarr;</a>
                        </div>
                    </div>

                    <!-- Métrica 3: Programas -->
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xs font-extrabold text-slate-400 uppercase tracking-wider">Programas Académicos</span>
                                <span class="p-2 bg-emerald-50 text-emerald-800 rounded-xl"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg></span>
                            </div>
                            <div class="text-3xl font-extrabold text-slate-900">{{ \App\Models\ProgramaAcademico::count() }}</div>
                            <p class="text-[11px] text-slate-400 mt-1">Oferta de pregrado</p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-gray-50 flex items-center justify-between text-xs">
                            <a href="{{ route('programas.index') }}" class="font-bold text-[#0b2545] hover:underline flex items-center space-x-1"><span>Gestionar programas</span> &rarr;</a>
                        </div>
                    </div>

                    <!-- Métrica 4: Asignaturas -->
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                        <div>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xs font-extrabold text-slate-400 uppercase tracking-wider">Asignaturas</span>
                                <span class="p-2 bg-purple-50 text-purple-800 rounded-xl"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg></span>
                            </div>
                            <div class="text-3xl font-extrabold text-slate-900">{{ \App\Models\Asignatura::count() }}</div>
                            <p class="text-[11px] text-slate-400 mt-1">Materias y créditos registrados</p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-gray-50 flex items-center justify-between text-xs">
                            <a href="{{ route('asignaturas.index') }}" class="font-bold text-[#0b2545] hover:underline flex items-center space-x-1"><span>Gestionar materias</span> &rarr;</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- SECCIÓN 3: ADMINISTRACIÓN Y CONTROL DE USUARIOS (Al estilo de la referencia) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- Tarjeta Ancha de Programación / Sistema -->
                <div class="lg:col-span-2 bg-gradient-to-r from-[#0b2545] to-indigo-950 text-white rounded-3xl shadow-xl p-8 flex flex-col justify-between relative overflow-hidden">
                    <div class="max-w-xl z-10">
                        <span class="bg-yellow-400 text-slate-900 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider">Control Institucional</span>
                        <h4 class="text-2xl font-extrabold text-white mt-3">Seguridad y Gestión de Accesos</h4>
                        <p class="text-indigo-200 text-sm mt-2 leading-relaxed">
                            Control de permisos para directores de programa, coordinadores académicos y personal administrativo autorizado en la plataforma AUNAR Villavicencio.
                        </p>
                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="{{ route('admin.users.index') }}" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold px-5 py-2.5 rounded-xl text-xs shadow transition">
                                Gestionar Usuarios ({{ \App\Models\User::count() }})
                            </a>
                            <a href="{{ route('admin.users.create') }}" class="bg-white/10 hover:bg-white/20 text-white font-bold px-5 py-2.5 rounded-xl text-xs backdrop-blur transition">
                                + Crear Cuenta
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de Estadísticas de Usuarios -->
                <div class="bg-white rounded-3xl shadow-lg p-6 border border-gray-100 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xs font-extrabold text-slate-400 uppercase tracking-wider">Roles del Sistema</span>
                            <span class="p-2 bg-indigo-50 text-[#0b2545] rounded-xl"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></span>
                        </div>
                        <div class="space-y-3 pt-2">
                            <div class="flex justify-between items-center bg-slate-50 p-3 rounded-2xl">
                                <span class="text-xs font-bold text-slate-600">Administradores</span>
                                <span class="text-sm font-extrabold text-[#0b2545]">{{ \App\Models\User::where('role', 'admin')->count() }}</span>
                            </div>
                            <div class="flex justify-between items-center bg-slate-50 p-3 rounded-2xl">
                                <span class="text-xs font-bold text-slate-600">Usuarios Estándar</span>
                                <span class="text-sm font-extrabold text-[#0b2545]">{{ \App\Models\User::where('role', 'user')->count() }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 mt-4 border-t border-gray-100 text-center">
                        <span class="text-[11px] text-slate-400">Total de cuentas activas: <strong class="text-slate-700">{{ \App\Models\User::count() }}</strong></span>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Script de Audio y Animaciones -->
    <script>
        function playHoverSound() {
            try {
                const audioCtx = new (window.AudioContext || window.webkitAudioContext)();
                const osc = audioCtx.createOscillator();
                const gain = audioCtx.createGain();
                osc.type = 'sine';
                osc.frequency.setValueAtTime(587.33, audioCtx.currentTime);
                gain.gain.setValueAtTime(0.02, audioCtx.currentTime);
                gain.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + 0.05);
                osc.connect(gain);
                gain.connect(audioCtx.destination);
                osc.start();
                osc.stop(audioCtx.currentTime + 0.05);
            } catch(e) {}
        }

        document.querySelectorAll('.interactive-module').forEach(module => {
            module.addEventListener('mouseenter', playHoverSound);
        });

        const aunardoContainer = document.getElementById('aunardo-container');
        const aunardoSpeech = document.getElementById('aunardo-speech');

        aunardoContainer.addEventListener('click', () => {
            aunardoSpeech.classList.toggle('hidden');
            try {
                const audioCtx = new (window.AudioContext || window.webkitAudioContext)();
                const notes = [523.25, 659.25, 783.99, 1046.50];
                notes.forEach((freq, index) => {
                    const osc = audioCtx.createOscillator();
                    const gain = audioCtx.createGain();
                    osc.type = 'triangle';
                    osc.frequency.setValueAtTime(freq, audioCtx.currentTime + (index * 0.07));
                    gain.gain.setValueAtTime(0.05, audioCtx.currentTime + (index * 0.07));
                    gain.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + (index * 0.07) + 0.15);
                    osc.connect(gain);
                    gain.connect(audioCtx.destination);
                    osc.start(audioCtx.currentTime + (index * 0.07));
                    osc.stop(audioCtx.currentTime + (index * 0.07) + 0.15);
                });
            } catch(e) {}
        });
    </script>
</x-app-layout>