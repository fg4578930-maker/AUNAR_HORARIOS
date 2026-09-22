<x-app-layout>
    <div class="min-h-screen bg-slate-100 pb-12 pt-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Estilos personalizados para animaciones y sombras -->
            <style>
                @keyframes float {
                    0%, 100% { transform: translateY(0px); }
                    50% { transform: translateY(-10px); }
                }
                .animate-float {
                    animation: float 3s ease-in-out infinite;
                }
            </style>

            <!-- Mensajes de Alerta -->
            @if(session('success'))
                <div class="mb-6 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-r shadow-sm">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <!-- BANNER DE BIENVENIDA CON AUNARDO ANIMADO E INTERACTIVO -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 mb-8 border border-gray-100 flex flex-col md:flex-row justify-between items-center relative overflow-hidden">
                <div class="max-w-3xl z-10">
                    <div class="inline-flex items-center space-x-2 bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-bold mb-4">
                        <span class="w-2 h-2 rounded-full bg-yellow-500 animate-pulse"></span>
                        <span>AUNAR • PANEL PRINCIPAL DE USUARIO</span>
                    </div>
                    <h2 class="text-sm font-semibold text-slate-500">Bienvenido, {{ Auth::user()->name }}</h2>
                    <h1 class="text-3xl font-extrabold text-slate-900 mt-1 tracking-tight">Sistema Institucional de Gestión Académica</h1>
                    <p class="text-slate-600 text-sm mt-3 leading-relaxed">
                        Accede al directorio de docentes, consulta el calendario, revisa los programas académicos y la información institucional disponible para tu rol en la plataforma.
                    </p>
                    
                    <div class="flex flex-wrap gap-3 mt-6">
                        <span class="bg-amber-50 text-amber-800 border border-amber-200 px-3 py-1 rounded-full text-xs font-semibold">📍 Sede: Villavicencio</span>
                        <span class="bg-emerald-50 text-emerald-800 border border-emerald-200 px-3 py-1 rounded-full text-xs font-semibold">🟢 Estado del sistema: Operativo</span>
                    </div>
                </div>
                
                <!-- AUNARDO INTERACTIVO CON MOVIMIENTO Y VIÑETA -->
                <div id="aunardo-container" class="relative flex flex-col items-center justify-center p-4 pt-10 mt-6 md:mt-0 cursor-pointer group z-20" title="¡Haz clic en Aunardo!">
                    
                    <!-- Viñeta de mensaje -->
                    <div id="aunardo-speech" class="hidden absolute -top-10 bg-white text-[#0b2545] text-xs font-bold px-4 py-2.5 rounded-2xl shadow-2xl border-2 border-yellow-400 whitespace-nowrap transition-all duration-300 z-30">
                        ¡Gracias por utilizar el sistema! 
                        <div class="absolute bottom-[-6px] left-1/2 transform -translate-x-1/2 w-3 h-3 bg-white border-r-2 border-b-2 border-yellow-400 rotate-45"></div>
                    </div>

                    <!-- Imagen con animación de flotación y sombra intensa -->
                    <img src="{{ asset('images/aunardo-bienvenida.png') }}" alt="Aunardo AUNAR" class="h-36 w-auto object-contain drop-shadow-[0_15px_15px_rgba(11,37,69,0.25)] animate-float transition duration-300 group-hover:scale-110">
                    
                    <span class="text-[11px] font-bold text-[#0b2545] mt-3 bg-yellow-300 px-3 py-0.5 rounded-full shadow-sm">¡Haz clic aquí!</span>
                </div>
            </div>

            <!-- SECCIÓN: MÓDULOS DISPONIBLES -->
            <div class="mb-8">
                <div class="flex items-center space-x-2 mb-6">
                    <div class="p-2 bg-yellow-400 rounded-lg text-slate-900 shadow">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">Módulos del Sistema</h3>
                        <p class="text-xs text-slate-500">Consulta de directorio, calendario y oferta académica institucional</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- MÓDULO: DOCENTES -->
                    <div class="interactive-module bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-2xl">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-blue-50 text-[#0b2545] px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-blue-100">Académico</span>
                                <span class="text-3xl font-extrabold text-[#0b2545]">{{ \App\Models\Docente::count() }}</span>
                            </div>
                            <h4 class="text-xl font-bold text-slate-900">Directorio de Docentes</h4>
                            <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                                Consulta el directorio completo, tipos de vinculación y datos de contacto de los profesores.
                            </p>
                        </div>
                        <div class="bg-slate-50 px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('docentes.index') }}" class="inline-flex items-center space-x-2 bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">
                                <span>Ver Docentes</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- MÓDULO: PERIODOS ACADÉMICOS -->
                    <div class="interactive-module bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-2xl">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-amber-50 text-amber-800 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-amber-100">Calendario</span>
                                <span class="text-3xl font-extrabold text-[#0b2545]">{{ \App\Models\PeriodoAcademico::count() }}</span>
                            </div>
                            <h4 class="text-xl font-bold text-slate-900">Periodos Académicos</h4>
                            <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                                Consulta los semestres activos, vigencias y fechas clave del calendario institucional AUNAR.
                            </p>
                        </div>
                        <div class="bg-slate-50 px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('periodos.index') }}" class="inline-flex items-center space-x-2 bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">
                                <span>Ver Periodos</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- MÓDULO: PROGRAMAS ACADÉMICOS -->
                    <div class="interactive-module bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 flex flex-col justify-between transition transform hover:-translate-y-1 hover:shadow-2xl">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-emerald-50 text-emerald-800 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-emerald-100">Oferta</span>
                                <span class="text-3xl font-extrabold text-[#0b2545]">{{ \App\Models\ProgramaAcademico::count() }}</span>
                            </div>
                            <h4 class="text-xl font-bold text-slate-900">Programas Académicos</h4>
                            <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                                Consulta los programas por facultad y sus respectivos planes de estudio asociados.
                            </p>
                        </div>
                        <div class="bg-slate-50 px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('programas.index') }}" class="inline-flex items-center space-x-2 bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-4 py-2 rounded-xl text-xs shadow transition">
                                <span>Ver Programas</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Script para los efectos de sonido y la viñeta interactiva -->
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