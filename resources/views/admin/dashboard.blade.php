<x-app-layout>
    <div class="min-h-screen bg-gray-50 pb-12 pt-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Estilos personalizados para animaciones y sombras institucionales -->
            <style>
                @keyframes float {
                    0%, 100% { transform: translateY(0px); }
                    50% { transform: translateY(-8px); }
                }
                .animate-float {
                    animation: float 3s ease-in-out infinite;
                }
            </style>

            <!-- Mensajes de Alerta -->
            @if(session('success'))
                <div class="mb-6 bg-yellow-50 border-l-4 border-yellow-400 text-slate-900 p-4 rounded-r shadow-sm font-semibold">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <!-- BANNER PRINCIPAL INSTITUCIONAL AUNAR -->
            <div class="bg-[#0b2545] rounded-2xl shadow-2xl p-8 mb-8 border-b-4 border-yellow-400 flex flex-col md:flex-row justify-between items-center relative overflow-hidden text-white">
                <div class="max-w-3xl z-10">
                    <div class="inline-flex items-center space-x-2 bg-yellow-400 text-slate-900 px-3 py-1 rounded-full text-xs font-extrabold mb-4 shadow">
                        <span class="w-2 h-2 rounded-full bg-slate-900 animate-pulse"></span>
                        <span>AUNAR • PANEL DE ADMINISTRACIÓN GENERAL</span>
                    </div>
                    <h2 class="text-sm font-medium text-yellow-300">Bienvenido, {{ Auth::user()->name }}</h2>
                    <h1 class="text-3xl font-black mt-1 tracking-tight text-white">Sistema Institucional de Gestión Académica</h1>
                    <p class="text-slate-200 text-sm mt-3 leading-relaxed">
                        Panel centralizado para la administración del directorio de docentes, programas académicos, asignaturas, control de accesos de usuarios y supervisión general de la plataforma.
                    </p>
                    
                    <div class="flex flex-wrap gap-3 mt-6">
                        <span class="bg-white/10 text-yellow-300 border border-yellow-400/30 px-3 py-1 rounded-full text-xs font-semibold">📍 Sede: Villavicencio</span>
                        <span class="bg-white/10 text-emerald-300 border border-emerald-400/30 px-3 py-1 rounded-full text-xs font-semibold">🟢 Estado del sistema: Operativo</span>
                    </div>
                </div>
                
                <!-- AUNARDO INTERACTIVO -->
                <div id="aunardo-container" class="relative flex flex-col items-center justify-center p-4 mt-6 md:mt-0 cursor-pointer group z-20" title="¡Haz clic en Aunardo!">
                    <div id="aunardo-speech" class="hidden absolute -top-10 bg-white text-[#0b2545] text-xs font-bold px-4 py-2.5 rounded-2xl shadow-2xl border-2 border-yellow-400 whitespace-nowrap transition-all duration-300 z-30">
                        ¡Bienvenidos a AUNAR! 
                        <div class="absolute bottom-[-6px] left-1/2 transform -translate-x-1/2 w-3 h-3 bg-white border-r-2 border-b-2 border-yellow-400 rotate-45"></div>
                    </div>
                    <img src="{{ asset('images/aunardo-bienvenida.png') }}" alt="Aunardo AUNAR" class="h-36 w-auto object-contain drop-shadow-[0_15px_15px_rgba(0,0,0,0.4)] animate-float transition duration-300 group-hover:scale-110">
                    <span class="text-[11px] font-bold text-slate-900 mt-2 bg-yellow-400 px-3 py-0.5 rounded-full shadow">¡Haz clic aquí!</span>
                </div>
            </div>

            <!-- SECCIÓN: MÓDULOS PRINCIPALES -->
            <div class="mb-8">
                <div class="flex items-center space-x-2 mb-6">
                    <div class="p-2.5 bg-[#0b2545] rounded-xl text-yellow-400 shadow-md border border-yellow-400/30">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-extrabold text-[#0b2545]">Módulos Principales del Sistema</h3>
                        <p class="text-xs text-slate-600 font-medium">Gestión de docentes, programas, asignaturas y control de usuarios activos</p>
                    </div>
                </div>

                <!-- Grid de 4 columnas para incluir todos los módulos -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- MÓDULO 1: DOCENTES -->
                    <div class="interactive-module bg-white rounded-2xl shadow-lg overflow-hidden border-t-4 border-[#0b2545] flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-2xl">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-slate-100 text-[#0b2545] px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Académico</span>
                                <span class="text-3xl font-black text-[#0b2545]">{{ $totalDocentes ?? 0 }}</span>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900">Directorio de Docentes</h4>
                            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                                Administra el registro, consulta y tipos de vinculación de los profesores.
                            </p>
                        </div>
                        <div class="bg-slate-50 px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('docentes.index') }}" class="inline-flex items-center space-x-1 bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-3 py-2 rounded-xl text-xs shadow transition">
                                <span>Ver Docentes</span>
                            </a>
                            <a href="{{ route('admin.docentes.create') }}" class="text-xs font-bold text-[#0b2545] hover:underline">+ Registrar</a>
                        </div>
                    </div>

                    <!-- MÓDULO 2: PROGRAMAS ACADÉMICOS -->
                    <div class="interactive-module bg-white rounded-2xl shadow-lg overflow-hidden border-t-4 border-blue-600 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-2xl">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-blue-200">Oferta Académica</span>
                                <span class="text-3xl font-black text-blue-700">{{ $totalProgramas ?? 0 }}</span>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900">Programas Académicos</h4>
                            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                                Administra los planes de estudio, códigos, facultades y estados institucionales.
                            </p>
                        </div>
                        <div class="bg-slate-50 px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('programas.index') }}" class="inline-flex items-center space-x-1 bg-blue-600 hover:bg-blue-700 text-white font-bold px-3 py-2 rounded-xl text-xs shadow transition">
                                <span>Ver Programas</span>
                            </a>
                            <a href="{{ route('admin.programas.create') }}" class="text-xs font-bold text-blue-700 hover:text-blue-900 hover:underline">+ Crear</a>
                        </div>
                    </div>

                    <!-- MÓDULO 3: ASIGNATURAS (NUEVO) -->
                    <div class="interactive-module bg-white rounded-2xl shadow-lg overflow-hidden border-t-4 border-[#0b2545] flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-2xl">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-blue-50 text-[#0b2545] px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-blue-100">Plan de Estudios</span>
                                <span class="text-3xl font-black text-[#0b2545]">{{ \App\Models\Asignatura::count() }}</span>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900">Asignaturas Académicas</h4>
                            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                                Gestiona materias, créditos, semestres y planes de estudio antiguos y nuevos.
                            </p>
                        </div>
                        <div class="bg-slate-50 px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('asignaturas.index') }}" class="inline-flex items-center space-x-1 bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-3 py-2 rounded-xl text-xs shadow transition">
                                <span>Ver Asignaturas</span>
                            </a>
                            <a href="{{ route('admin.asignaturas.create') }}" class="text-xs font-bold text-[#0b2545] hover:underline">+ Crear</a>
                        </div>
                    </div>

                    <!-- MÓDULO 4: GESTIÓN DE USUARIOS -->
                    <div class="interactive-module bg-[#0b2545] text-white rounded-2xl shadow-lg overflow-hidden border-t-4 border-yellow-400 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-2xl">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-yellow-400 text-slate-900 px-3 py-1 rounded-full text-xs font-black uppercase tracking-wider">Seguridad</span>
                                <span class="text-3xl font-black text-yellow-400">{{ $totalUsers ?? 0 }}</span>
                            </div>
                            <h4 class="text-lg font-bold text-white">Gestión de Usuarios</h4>
                            <p class="text-xs text-slate-200 mt-2 leading-relaxed">
                                Control de permisos y cuentas de administradores y usuarios estándar.
                            </p>
                        </div>
                        <div class="bg-slate-900/40 px-6 py-4 border-t border-slate-800 flex items-center justify-between">
                            <a href="{{ route('admin.users.index') }}" class="inline-flex items-center space-x-1 bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-extrabold px-3 py-2 rounded-xl text-xs shadow transition">
                                <span>Ver Usuarios</span>
                            </a>
                            <a href="{{ route('admin.users.create') }}" class="text-xs font-bold text-yellow-400 hover:underline">+ Crear</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- TARJETAS DE ESTADÍSTICAS SECUNDARIAS -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-[#0b2545]">
                    <div class="text-xs font-extrabold text-slate-500 uppercase tracking-wider">Administradores</div>
                    <div class="text-2xl font-black text-slate-900 mt-1">{{ $totalAdmins ?? 0 }}</div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-yellow-400">
                    <div class="text-xs font-extrabold text-slate-500 uppercase tracking-wider">Usuarios Estándar</div>
                    <div class="text-2xl font-black text-slate-900 mt-1">{{ $totalStandardUsers ?? 0 }}</div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-[#0b2545]">
                    <div class="text-xs font-extrabold text-slate-500 uppercase tracking-wider">Docentes Vinculados</div>
                    <div class="text-2xl font-black text-slate-900 mt-1">{{ $totalDocentes ?? 0 }}</div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-blue-600">
                    <div class="text-xs font-extrabold text-slate-500 uppercase tracking-wider">Programas Académicos</div>
                    <div class="text-2xl font-black text-slate-900 mt-1">{{ $totalProgramas ?? 0 }}</div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-[#0b2545]">
                    <div class="text-xs font-extrabold text-slate-500 uppercase tracking-wider">Asignaturas Totales</div>
                    <div class="text-2xl font-black text-slate-900 mt-1">{{ \App\Models\Asignatura::count() }}</div>
                </div>
            </div>

        </div>
    </div>

    <!-- Script de efectos de sonido e interacción -->
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