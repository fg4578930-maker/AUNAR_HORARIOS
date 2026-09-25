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

            <!-- BANNER HERO PRINCIPAL -->
            <div class="bg-white rounded-3xl shadow-xl p-8 mb-8 border border-gray-100 flex flex-col md:flex-row justify-between items-center relative overflow-hidden">
                <div class="max-w-3xl z-10">
                    <div class="inline-flex items-center space-x-2 bg-yellow-100 text-yellow-800 px-3.5 py-1 rounded-full text-xs font-extrabold mb-4 tracking-wider uppercase">
                        <span class="w-2 h-2 rounded-full bg-yellow-500 animate-pulse"></span>
                        <span>AUNAR • Panel Principal de Usuario</span>
                    </div>
<<<<<<< HEAD
                    <h2 class="text-sm font-semibold text-slate-500">Bienvenido, {{ Auth::user()->name }}</h2>
                    <h1 class="text-3xl font-extrabold text-slate-900 mt-1 tracking-tight">Sistema Institucional de Gestión Académica</h1>
                    <p class="text-slate-600 text-sm mt-3 leading-relaxed">
                        Accede al directorio de docentes, consulta los programas académicos institucionales y explora la información disponible para tu rol en la plataforma.
=======
                    <h1 class="text-3xl font-extrabold text-[#0b2545] tracking-tight">Bienvenido, {{ Auth::user()->name }}</h1>
                    <p class="text-slate-500 text-sm mt-2 leading-relaxed">
                        Sistema institucional de consulta académica. Accede al directorio docente, calendario, oferta de programas, asignaturas, planes de estudio y espacios físicos disponible para tu rol en la plataforma.
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
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
                        ¡Hola! Consulta la información académica aquí 🎓
                        <div class="absolute bottom-[-6px] left-1/2 transform -translate-x-1/2 w-3 h-3 bg-white border-r-2 border-b-2 border-yellow-400 rotate-45"></div>
                    </div>
                    <img src="{{ asset('images/aunardo-bienvenida.png') }}" alt="Aunardo AUNAR" class="h-36 w-auto object-contain drop-shadow-[0_15px_15px_rgba(11,37,69,0.2)] animate-float transition duration-300 group-hover:scale-110">
                    <span class="text-[10px] font-extrabold text-[#0b2545] mt-2 bg-yellow-300 px-3 py-0.5 rounded-full shadow-sm">¡Haz clic!</span>
                </div>
            </div>

            <!-- SECCIÓN: MÓDULOS DE CONSULTA -->
            <div class="mb-10">
                <div class="flex items-center space-x-2 mb-6">
                    <div class="p-2 bg-yellow-400 rounded-xl text-slate-900 shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <div>
<<<<<<< HEAD
                        <h3 class="text-lg font-bold text-slate-900">Módulos del Sistema</h3>
                        <p class="text-xs text-slate-500">Consulta de directorio y oferta académica institucional</p>
=======
                        <h3 class="text-lg font-extrabold text-[#0b2545]">Módulos de Consulta Académica</h3>
                        <p class="text-xs text-slate-500">Acceso a directorios, calendarios, oferta institucional e infraestructura</p>
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6">
                    
                    <!-- Módulo 1: Docentes -->
                    <div class="interactive-module bg-white rounded-3xl shadow-lg p-6 border border-gray-100 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-xl">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-blue-50 text-[#0b2545] px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider border border-blue-100">Directorio</span>
                                <span class="text-2xl font-extrabold text-[#0b2545]">{{ \App\Models\Docente::count() }}</span>
                            </div>
                            <h4 class="text-base font-extrabold text-slate-900">Docentes</h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Consulta el directorio completo y tipos de vinculación de los profesores.
                            </p>
                        </div>
                        <div class="pt-6 mt-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('docentes.index') }}" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">Ver Docentes</a>
                        </div>
                    </div>

                    <!-- Módulo 2: Periodos -->
                    <div class="interactive-module bg-white rounded-3xl shadow-lg p-6 border border-gray-100 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-xl">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-amber-50 text-amber-800 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider border border-amber-100">Calendario</span>
                                <span class="text-2xl font-extrabold text-[#0b2545]">{{ \App\Models\PeriodoAcademico::count() }}</span>
                            </div>
                            <h4 class="text-base font-extrabold text-slate-900">Periodos Académicos</h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Revisa los semestres activos, vigencias y fechas clave institucionales.
                            </p>
                        </div>
                        <div class="pt-6 mt-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('periodos.index') }}" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">Ver Periodos</a>
                        </div>
                    </div>

                    <!-- Módulo 3: Programas -->
                    <div class="interactive-module bg-white rounded-3xl shadow-lg p-6 border border-gray-100 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-xl">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-emerald-50 text-emerald-800 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider border border-emerald-100">Oferta</span>
                                <span class="text-2xl font-extrabold text-[#0b2545]">{{ \App\Models\ProgramaAcademico::count() }}</span>
                            </div>
                            <h4 class="text-base font-extrabold text-slate-900">Programas Académicos</h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Consulta los programas por facultad y sus planes de estudio.
                            </p>
                        </div>
                        <div class="pt-6 mt-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('programas.index') }}" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">Ver Programas</a>
                        </div>
                    </div>

                    <!-- Módulo 4: Asignaturas -->
                    <div class="interactive-module bg-white rounded-3xl shadow-lg p-6 border border-gray-100 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-xl">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-purple-50 text-purple-800 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider border border-purple-100">Plan</span>
                                <span class="text-2xl font-extrabold text-[#0b2545]">{{ \App\Models\Asignatura::count() }}</span>
                            </div>
                            <h4 class="text-base font-extrabold text-slate-900">Asignaturas</h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Busca materias, créditos y tipos teóricos o prácticos.
                            </p>
                        </div>
                        <div class="pt-6 mt-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('asignaturas.index') }}" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">Ver Asignaturas</a>
                        </div>
                    </div>

                    <!-- Módulo 5: Planes de Estudio -->
                    <div class="interactive-module bg-white rounded-3xl shadow-lg p-6 border border-gray-100 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-xl">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-indigo-50 text-indigo-800 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider border border-indigo-100">Curricular</span>
                                <span class="text-2xl font-extrabold text-[#0b2545]">{{ \App\Models\PlanEstudio::count() }}</span>
                            </div>
                            <h4 class="text-base font-extrabold text-slate-900">Planes de Estudio</h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Consulta mallas curriculares y asignaturas por semestre.
                            </p>
                        </div>
                        <div class="pt-6 mt-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('planes.index') }}" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">Ver Planes</a>
                        </div>
                    </div>

                    <!-- Módulo 6: Aulas y Laboratorios (NUEVO) -->
                    <div class="interactive-module bg-white rounded-3xl shadow-lg p-6 border border-gray-100 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-xl">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-yellow-50 text-yellow-800 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider border border-yellow-100">Infraestructura</span>
                                <span class="text-2xl font-extrabold text-[#0b2545]">{{ \App\Models\Aula::count() }}</span>
                            </div>
                            <h4 class="text-base font-extrabold text-slate-900">Aulas y Labs</h4>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Consulta espacios físicos, capacidades y exclusividades.
                            </p>
                        </div>
                        <div class="pt-6 mt-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('aulas.index') }}" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">Ver Aulas</a>
                        </div>
                    </div>

                    <!-- MÓDULO: PROGRAMAS ACADÉMICOS (NUEVO - MODO CONSULTA) -->
                    <div class="interactive-module bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-2xl">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-blue-200">Oferta Académica</span>
                                <span class="text-3xl font-extrabold text-blue-700">{{ \App\Models\Programa::count() }}</span>
                            </div>
                            <h4 class="text-xl font-bold text-slate-900">Programas Académicos</h4>
                            <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                                Consulta el listado de planes de estudio, facultades y estados de los programas académicos institucionales vigentes.
                            </p>
                        </div>
                        <div class="bg-slate-50 px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('programas.index') }}" class="inline-flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">
                                <span>Consultar Programas</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
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