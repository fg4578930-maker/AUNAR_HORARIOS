<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-xl text-[#0b2545] leading-tight">
            {{ __('Detalle del Programa Académico') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 p-8">
                
                <div class="border-b border-gray-100 pb-4 mb-6">
                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider">Información Institucional</span>
                    <h3 class="text-2xl font-black text-[#0b2545] mt-2">{{ $programa->nombre }}</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-slate-50 p-4 rounded-xl border border-gray-100">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Código del Programa</span>
                        <span class="text-lg font-black text-[#0b2545] mt-1 block">{{ $programa->codigo }}</span>
                    </div>

                    <div class="bg-slate-50 p-4 rounded-xl border border-gray-100">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Número de Plan de Estudios</span>
                        <span class="text-lg font-black text-slate-800 mt-1 block">{{ $programa->plan_estudios }}</span>
                    </div>

                    <div class="bg-slate-50 p-4 rounded-xl border border-gray-100 md:col-span-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Facultad</span>
                        <span class="text-base font-bold text-slate-800 mt-1 block">{{ $programa->facultad }}</span>
                    </div>

                    <div class="bg-slate-50 p-4 rounded-xl border border-gray-100 md:col-span-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Estado Actual</span>
                        <div class="mt-1">
                            <span class="px-3.5 py-1 inline-flex text-xs leading-5 font-extrabold rounded-full {{ $programa->estado == 'Activo' ? 'bg-emerald-100 text-emerald-800' : 'bg-red-100 text-red-800' }}">
                                {{ $programa->estado }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end pt-4 border-t border-gray-100">
                    <a href="{{ route('programas.index') }}" class="inline-flex items-center space-x-2 bg-[#0b2545] hover:bg-slate-800 text-white font-extrabold py-2.5 px-5 rounded-xl shadow transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        <span>Volver al Listado</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>