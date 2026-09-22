<x-app-layout>
    <div class="min-h-screen bg-slate-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Encabezado del Plan -->
            <div class="mb-8 bg-white rounded-3xl shadow-xl p-8 border border-gray-100 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                <div>
                    <div class="flex flex-wrap items-center gap-2 mb-2">
                        <span class="bg-yellow-400 text-slate-900 px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider">Código: {{ $plan->programa->codigo ?? 'N/A' }}</span>
                        <span class="bg-indigo-50 text-indigo-800 px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider">Plan: {{ $plan->tipo }}</span>
                        <span class="bg-emerald-50 text-emerald-800 px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider">Total Créditos: {{ $plan->asignaturas->sum('creditos') }}</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-[#0b2545]">{{ $plan->programa->nombre ?? 'Programa no asignado' }}</h1>
                    <p class="text-sm text-slate-500 mt-1">Facultad: {{ $plan->programa->facultad ?? 'N/A' }} • Total semestres: {{ $plan->semestres }}</p>
                </div>

                <a href="{{ route('planes.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold px-4 py-2.5 rounded-xl text-xs transition">
                    &larr; Volver al Listado
                </a>
            </div>

            @if(session('success'))
                <div class="mb-6 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-xl shadow-sm text-sm">
                    {{ session('success') }}
                </div>
            @endif

            @if(Auth::user()->role === 'admin')
                <!-- Formulario buscador y asignación de materias (Exclusivo Admin) -->
                <div class="mb-10 bg-white rounded-3xl shadow-lg p-6 border border-gray-100">
                    <h3 class="text-base font-extrabold text-[#0b2545] mb-4">Añadir Asignatura a la Malla</h3>
                    
                    <form method="GET" action="{{ route('planes.show', $plan->id) }}" class="mb-4">
                        <div class="flex gap-2">
                            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Buscar asignatura por nombre o código para añadir..." 
                                class="flex-1 px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" />
                            <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-5 py-2.5 rounded-xl text-xs shadow transition">Buscar</button>
                            @if($search)
                                <a href="{{ route('planes.show', $plan->id) }}" class="bg-gray-200 text-slate-700 font-bold px-4 py-2.5 rounded-xl text-xs flex items-center">Limpiar</a>
                            @endif
                        </div>
                    </form>

                    @if(isset($search) && $search != '')
                        <div class="bg-slate-50 p-4 rounded-2xl border border-gray-200 max-h-60 overflow-y-auto space-y-2">
                            @forelse($asignaturasDisponibles as $asig)
                                <div class="flex items-center justify-between bg-white p-3 rounded-xl border border-gray-100 shadow-sm">
                                    <div>
                                        <span class="text-xs font-bold text-[#0b2545]">{{ $asig->codigo }}</span>
                                        <h5 class="text-sm font-bold text-slate-800">{{ $asig->nombre }}</h5>
                                        <span class="text-[11px] text-slate-400">{{ $asig->creditos }} créditos • {{ $asig->tipo }}</span>
                                    </div>
                                    
                                    <!-- Formulario para asignar a un semestre -->
                                    <form method="POST" action="{{ route('admin.planes.agregarAsignatura', $plan->id) }}" class="flex items-center gap-2">
                                        @csrf
                                        <input type="hidden" name="asignatura_id" value="{{ $asig->id }}">
                                        <select name="semestre_numero" required class="px-3 py-1.5 border border-gray-300 rounded-xl text-xs font-bold">
                                            <option value="">Semestre...</option>
                                            @for($i = 1; $i <= $plan->semestres; $i++)
                                                <option value="{{ $i }}">Semestre {{ $i }}</option>
                                            @endfor
                                        </select>
                                        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-extrabold px-3 py-1.5 rounded-xl text-xs shadow">Añadir</button>
                                    </form>
                                </div>
                            @empty
                                <p class="text-xs text-slate-400 text-center py-2">No se encontraron asignaturas disponibles con ese término de búsqueda.</p>
                            @endforelse
                        </div>
                    @endif
                </div>
            @endif

            <!-- Malla Curricular: Tarjetas por Semestre -->
            <div class="space-y-6">
                <h3 class="text-lg font-extrabold text-[#0b2545]">Malla Curricular Interactiva</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @for($sem = 1; $sem <= $plan->semestres; $sem++)
                        @php
                            $materiasSemestre = $plan->asignaturas->where('pivot.semestre_numero', $sem);
                            $totalCreditosSemestre = $materiasSemestre->sum('creditos');
                        @endphp
                        <div class="bg-white rounded-3xl shadow-md border border-gray-100 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center mb-4 pb-3 border-b border-gray-100">
                                    <span class="bg-blue-50 text-[#0b2545] px-3 py-1 rounded-full text-xs font-extrabold uppercase">Semestre {{ $sem }}</span>
                                    <div class="text-right">
                                        <span class="text-xs font-extrabold text-slate-700 block">{{ $totalCreditosSemestre }} créditos</span>
                                        <span class="text-[11px] font-bold text-slate-400">{{ $materiasSemestre->count() }} materias</span>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    @forelse($materiasSemestre as $asignatura)
                                        <div class="bg-slate-50 p-3.5 rounded-2xl border border-gray-100 flex justify-between items-start">
                                            <div>
                                                <span class="text-[10px] font-extrabold text-[#0b2545] bg-yellow-200 px-2 py-0.5 rounded-md">{{ $asignatura->codigo }}</span>
                                                <h4 class="text-xs font-extrabold text-slate-800 mt-1">{{ $asignatura->nombre }}</h4>
                                                <p class="text-[10px] text-slate-500 mt-0.5">{{ $asignatura->creditos }} créditos • {{ $asignatura->tipo }}</p>
                                            </div>

                                            @if(Auth::user()->role === 'admin')
                                                <form action="{{ route('admin.planes.removerAsignatura', [$plan->id, $asignatura->id]) }}" method="POST" onsubmit="return confirm('¿Remover esta asignatura del semestre?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-rose-500 hover:text-rose-700 font-bold text-xs p-1" title="Remover">&times;</button>
                                                </form>
                                            @endif
                                        </div>
                                    @empty
                                        <p class="text-xs text-slate-400 text-center py-6 italic">No hay asignaturas en este semestre.</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

        </div>
    </div>
</x-app-layout> 