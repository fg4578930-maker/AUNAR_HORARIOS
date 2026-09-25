<x-app-layout>
<<<<<<< HEAD
    <div class="min-h-screen bg-gray-50 pb-12 pt-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Estilos personalizados para animaciones y sombras institucionales -->
=======
    <div class="min-h-screen bg-slate-100 pb-16 pt-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Estilos personalizados para animaciones -->
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
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
<<<<<<< HEAD
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
=======
                <div class="mb-6 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-2xl shadow-sm text-sm font-medium flex items-center space-x-2">
                    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <!-- BANNER HERO PRINCIPAL -->
            <div class="bg-gradient-to-r from-white via-slate-50 to-indigo-50/40 rounded-3xl shadow-xl p-8 mb-10 border border-slate-200/60 flex flex-col md:flex-row justify-between items-center relative overflow-hidden">
                <div class="max-w-3xl z-10">
                    <div class="inline-flex items-center space-x-2 bg-yellow-400/20 text-yellow-900 px-4 py-1.5 rounded-full text-xs font-black mb-4 tracking-wider uppercase border border-yellow-400/30">
                        <span class="w-2.5 h-2.5 rounded-full bg-yellow-500 animate-pulse shadow-sm"></span>
                        <span>AUNAR • Panel de Administración General</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-black text-[#0b2545] tracking-tight">Sistema Inteligente de Horarios</h1>
                    <p class="text-[#0b2545]/80 text-sm sm:text-base mt-3 font-medium leading-relaxed">
                        Panel centralizado de alta precisión para la administración de la oferta académica, asignación de espacios de aprendizaje, gestión docente y optimización del tiempo institucional.
                    </p>
                    
                    <div class="flex flex-wrap items-center gap-3 mt-6">
                        <span class="bg-white text-[#0b2545] border border-slate-200 px-3.5 py-1.5 rounded-xl text-xs font-bold shadow-sm flex items-center space-x-1.5">
                            <span>🟡</span> <span>Periodo activo: 2026-2</span>
                        </span>
                        <span class="bg-emerald-50 text-emerald-800 border border-emerald-200 px-3.5 py-1.5 rounded-xl text-xs font-bold shadow-sm flex items-center space-x-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span> <span>Sistema Operativo</span>
                        </span>
                        <span class="bg-blue-50 text-[#0b2545] border border-blue-100 px-3.5 py-1.5 rounded-xl text-xs font-bold shadow-sm">
                            📍 Sede: Villavicencio
                        </span>
                    </div>
                </div>
                
                <!-- Aunardo Interactivo -->
                <div id="aunardo-container" class="relative flex flex-col items-center justify-center p-4 mt-6 md:mt-0 cursor-pointer group z-20" title="¡Haz clic en Aunardo!">
                    <img src="{{ asset('images/aunardo-bienvenida.png') }}" alt="Aunardo AUNAR" class="h-44 w-auto object-contain drop-shadow-[0_8px_12px_rgba(11,37,69,0.12)] animate-float transition duration-300 group-hover:scale-105 relative z-10">
                    <span class="text-[10px] font-black text-[#0b2545] mt-2 bg-yellow-400 px-3 py-0.5 rounded-full shadow-sm tracking-wide uppercase">¡Haz clic!</span>
                </div>
            </div>

            <!-- SECCIÓN 1: CENTRO DE GESTIÓN ACADÉMICA (Tarjetas Principales) -->
            <div class="mb-10">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="p-2.5 bg-yellow-400 rounded-2xl text-[#0b2545] shadow-md shadow-yellow-400/30">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-black text-[#0b2545] tracking-tight">Centro de Gestión Académica</h3>
                        <p class="text-xs font-bold text-[#0b2545]/70">Planificación, administración de personal y control curricular avanzado</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- Tarjeta 1 (Docentes) -->
                    <div class="interactive-module bg-white rounded-3xl shadow-xl p-7 border-t-4 border-blue-600 border-x border-b border-slate-200/80 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl relative overflow-hidden group">
                        <div class="relative z-10">
                            <div class="flex justify-between items-start mb-5">
                                <span class="bg-blue-50 text-[#0b2545] px-3.5 py-1.5 rounded-full text-[11px] font-black uppercase tracking-wider border border-blue-100 shadow-sm">⭐ Módulo Principal</span>
                                <span class="text-4xl font-black text-[#0b2545] tracking-tighter">{{ \App\Models\Docente::count() }}</span>
                            </div>
                            <h4 class="text-xl font-black text-[#0b2545] group-hover:text-blue-900 transition-colors">Directorio de Docentes</h4>
                            <p class="text-xs font-medium text-[#0b2545]/80 mt-2.5 leading-relaxed">
                                Supervisa la asignación de profesores, tipos de vinculación y datos institucionales clave.
                            </p>
                        </div>
                        <div class="pt-6 mt-6 border-t border-slate-100 flex items-center justify-between relative z-10">
                            <a href="{{ route('admin.docentes.create') }}" class="text-xs font-black text-blue-700 hover:text-blue-900 hover:underline flex items-center space-x-1"><span>+ Registrar Docente</span></a>
                        </div>
                    </div>

                    <!-- Tarjeta 2 (Asignaturas) -->
                    <div class="interactive-module bg-gradient-to-br from-[#0b2545] to-indigo-950 text-white rounded-3xl shadow-xl p-7 border border-indigo-900/60 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl relative overflow-hidden group">
                        <div class="relative z-10">
                            <div class="flex justify-between items-start mb-5">
                                <span class="bg-yellow-400 text-[#0b2545] px-3.5 py-1.5 rounded-full text-[11px] font-black uppercase tracking-wider shadow-md">Consulta General</span>
                                <span class="text-4xl font-black text-yellow-400 tracking-tighter">{{ \App\Models\Asignatura::count() }}</span>
                            </div>
                            <h4 class="text-xl font-black text-white">Catálogo de Asignaturas</h4>
                            <p class="text-xs font-medium text-indigo-100/90 mt-2.5 leading-relaxed">
                                Visualización interactiva segmentada por código, créditos académicos y metodología institucional.
                            </p>
                        </div>
                        <div class="pt-6 mt-6 border-t border-indigo-900/80 flex items-center justify-between relative z-10">
                            <a href="{{ route('admin.asignaturas.create') }}" class="text-xs font-black text-yellow-400 hover:text-yellow-300 hover:underline">+ Nueva Asignatura</a>
                        </div>
                    </div>

                    <!-- Tarjeta 3 (Programas) -->
                    <div class="interactive-module bg-gradient-to-br from-yellow-400 to-amber-500 text-[#0b2545] rounded-3xl shadow-xl p-7 border border-yellow-500/60 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl relative overflow-hidden group">
                        <div class="relative z-10">
                            <div class="flex justify-between items-start mb-5">
                                <span class="bg-[#0b2545] text-white px-3.5 py-1.5 rounded-full text-[11px] font-black uppercase tracking-wider shadow-md">Estructura</span>
                                <span class="text-4xl font-black text-[#0b2545] tracking-tighter">{{ \App\Models\ProgramaAcademico::count() }}</span>
                            </div>
                            <h4 class="text-xl font-black text-[#0b2545]">Programas Académicos</h4>
                            <p class="text-xs font-bold text-[#0b2545]/85 mt-2.5 leading-relaxed">
                                Organización de pregrados y facultades con conteo automático de planes de estudio.
                            </p>
                        </div>
                        <div class="pt-6 mt-6 border-t border-amber-600/30 flex items-center justify-between relative z-10">
                            <a href="{{ route('admin.programas.create') }}" class="text-xs font-black text-[#0b2545] hover:underline">+ Crear Programa</a>
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
                        </div>
                    </div>

                </div>
            </div>

<<<<<<< HEAD
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
=======
            <!-- SECCIÓN 2: RECURSOS Y CAPACIDAD ACADÉMICA -->
            <div class="mb-10">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="p-2.5 bg-[#0b2545] rounded-2xl text-white shadow-md shadow-[#0b2545]/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-black text-[#0b2545] tracking-tight">Capacidad y Recursos Académicos</h3>
                        <p class="text-xs font-bold text-[#0b2545]/70">Disponibilidad de infraestructura institucional, oferta y capital docente</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Métrica 1: Docentes -->
                    <div class="bg-white p-7 rounded-3xl shadow-lg border-l-4 border-blue-500 border-t border-r border-b border-slate-200/80 flex flex-col justify-between hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-xs font-black text-[#0b2545]/70 uppercase tracking-wider">Docentes</span>
                                <span class="p-3 bg-blue-50 text-[#0b2545] rounded-2xl shadow-sm"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg></span>
                            </div>
                            <div class="text-4xl font-black text-[#0b2545] tracking-tight">{{ \App\Models\Docente::count() }}</div>
                            <p class="text-xs font-semibold text-[#0b2545]/70 mt-1">Profesores registrados</p>
                        </div>
                    </div>

                    <!-- Métrica 2: Periodos Académicos -->
                    <div class="bg-white p-7 rounded-3xl shadow-lg border-l-4 border-amber-500 border-t border-r border-b border-slate-200/80 flex flex-col justify-between hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-xs font-black text-[#0b2545]/70 uppercase tracking-wider">Periodos</span>
                                <span class="p-3 bg-amber-50 text-amber-800 rounded-2xl shadow-sm"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></span>
                            </div>
                            <div class="text-4xl font-black text-[#0b2545] tracking-tight">{{ \App\Models\PeriodoAcademico::count() }}</div>
                            <p class="text-xs font-semibold text-[#0b2545]/70 mt-1">Ciclos académicos</p>
                        </div>
                    </div>

                    <!-- Métrica 3: Programas -->
                    <div class="bg-white p-7 rounded-3xl shadow-lg border-l-4 border-emerald-500 border-t border-r border-b border-slate-200/80 flex flex-col justify-between hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-xs font-black text-[#0b2545]/70 uppercase tracking-wider">Programas</span>
                                <span class="p-3 bg-emerald-50 text-emerald-800 rounded-2xl shadow-sm"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg></span>
                            </div>
                            <div class="text-4xl font-black text-[#0b2545] tracking-tight">{{ \App\Models\ProgramaAcademico::count() }}</div>
                            <p class="text-xs font-semibold text-[#0b2545]/70 mt-1">Oferta de pregrado</p>
                        </div>
                    </div>

                    <!-- Métrica 4: Asignaturas -->
                    <div class="bg-white p-7 rounded-3xl shadow-lg border-l-4 border-purple-500 border-t border-r border-b border-slate-200/80 flex flex-col justify-between hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-xs font-black text-[#0b2545]/70 uppercase tracking-wider">Asignaturas</span>
                                <span class="p-3 bg-purple-50 text-purple-800 rounded-2xl shadow-sm"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg></span>
                            </div>
                            <div class="text-4xl font-black text-[#0b2545] tracking-tight">{{ \App\Models\Asignatura::count() }}</div>
                            <p class="text-xs font-semibold text-[#0b2545]/70 mt-1">Materias registradas</p>
                        </div>
                    </div>

                    <!-- Métrica 5: Planes de Estudio -->
                    <div class="bg-white p-7 rounded-3xl shadow-lg border-l-4 border-indigo-500 border-t border-r border-b border-slate-200/80 flex flex-col justify-between hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-xs font-black text-[#0b2545]/70 uppercase tracking-wider">Planes de Estudio</span>
                                <span class="p-3 bg-indigo-50 text-indigo-800 rounded-2xl shadow-sm"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg></span>
                            </div>
                            <div class="text-4xl font-black text-[#0b2545] tracking-tight">{{ \App\Models\PlanEstudio::count() }}</div>
                            <p class="text-xs font-semibold text-[#0b2545]/70 mt-1">Mallas curriculares activas</p>
                        </div>
                    </div>

                    <!-- Métrica 6: Aulas y Laboratorios -->
                    <div class="bg-white p-7 rounded-3xl shadow-lg border-l-4 border-yellow-500 border-t border-r border-b border-slate-200/80 flex flex-col justify-between hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-xs font-black text-[#0b2545]/70 uppercase tracking-wider">Aulas y Labs</span>
                                <span class="p-3 bg-yellow-50 text-yellow-800 rounded-2xl shadow-sm"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg></span>
                            </div>
                            <div class="text-4xl font-black text-[#0b2545] tracking-tight">{{ \App\Models\Aula::count() }}</div>
                            <p class="text-xs font-semibold text-[#0b2545]/70 mt-1">Espacios físicos institucionales</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- SECCIÓN 3: ADMINISTRACIÓN Y CONTROL DE USUARIOS (Tarjeta más pequeña y compacta) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- Tarjeta Ancha del Sistema (Más compacta) -->
                <div class="lg:col-span-2 bg-gradient-to-br from-[#0b2545] via-slate-900 to-indigo-950 text-white rounded-3xl shadow-xl p-6 flex flex-col justify-between relative overflow-hidden">
                    <div class="max-w-xl z-10">
                        <span class="bg-yellow-400 text-[#0b2545] px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider shadow-md">Control Institucional</span>
                        <h4 class="text-xl font-black text-white mt-2">Seguridad y Gestión de Accesos</h4>
                        <p class="text-indigo-200 text-xs sm:text-sm mt-1.5 leading-relaxed">
                            Control de permisos para directores de programa, coordinadores académicos y personal administrativo autorizado en la plataforma AUNAR Villavicencio.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2.5">
                            <a href="{{ route('admin.users.index') }}" class="bg-yellow-400 hover:bg-yellow-300 text-[#0b2545] font-black px-4 py-2.5 rounded-xl text-xs shadow-lg transition transform active:scale-95">
                                Gestionar Usuarios ({{ \App\Models\User::count() }})
                            </a>
                            <a href="{{ route('admin.users.create') }}" class="bg-white/10 hover:bg-white/20 text-white font-black px-4 py-2.5 rounded-xl text-xs backdrop-blur-md transition border border-white/10">
                                + Crear Cuenta
                            </a>
                        </div>
                    </div>
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
                </div>

                <!-- Tarjeta de Gestión de Usuarios Reducida -->
                <div class="bg-white rounded-3xl shadow-lg p-6 border border-slate-200/80 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-black text-[#0b2545]/70 uppercase tracking-wider">Roles Activos</span>
                            <span class="p-2.5 bg-indigo-50 text-[#0b2545] rounded-xl"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></span>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center bg-slate-50 p-2.5 rounded-xl border border-slate-100">
                                <span class="text-xs font-bold text-[#0b2545]/80">Admin</span>
                                <span class="text-xs font-black text-[#0b2545] bg-blue-100/60 px-2.5 py-0.5 rounded-lg">{{ \App\Models\User::where('role', 'admin')->count() }}</span>
                            </div>
                            <div class="flex justify-between items-center bg-slate-50 p-2.5 rounded-xl border border-slate-100">
                                <span class="text-xs font-bold text-[#0b2545]/80">Estándar</span>
                                <span class="text-xs font-black text-[#0b2545] bg-slate-200/60 px-2.5 py-0.5 rounded-lg">{{ \App\Models\User::where('role', 'user')->count() }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3 mt-3 border-t border-slate-100 text-center">
                        <span class="text-[11px] text-[#0b2545]/70 font-semibold">Total cuentas: <strong class="text-[#0b2545] font-black">{{ \App\Models\User::count() }}</strong></span>
                    </div>
                </div>

            </div>

        </div>
    </div>

<<<<<<< HEAD
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

=======
    <!-- Script de Audio y Animaciones -->
    <script>
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
        const aunardoContainer = document.getElementById('aunardo-container');

        aunardoContainer.addEventListener('click', () => {
<<<<<<< HEAD
            aunardoSpeech.classList.toggle('hidden');
            
            try {
                const audioCtx = new (window.AudioContext || window.webkitAudioContext)();
                const notes = [523.25, 659.25, 783.99, 1046.50]; 
=======
            try {
                const audioCtx = new (window.AudioContext || window.webkitAudioContext)();
                const notes = [523.25, 659.25, 783.99, 1046.50];
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
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