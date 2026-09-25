<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-xl text-[#0b2545] leading-tight">
            {{ __('Editar Programa Académico') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 p-8">
                
                <div class="border-b border-gray-100 pb-4 mb-6">
                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider">Modificación de Registro</span>
                    <h3 class="text-2xl font-black text-[#0b2545] mt-2">Actualizar Datos del Programa</h3>
                </div>

                @if ($errors->any())
                    <div class="mb-6 bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-r shadow-sm">
                        <ul class="list-disc list-inside text-sm font-semibold">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.programas.update', $programa->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                        <label for="codigo" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Código del Programa</label>
                        <input type="text" name="codigo" id="codigo" value="{{ old('codigo', $programa->codigo) }}" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                    </div>

                    <div class="mb-5">
                        <label for="nombre" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Nombre del Programa</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $programa->nombre) }}" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                    </div>

                    <div class="mb-5">
                        <label for="facultad" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Facultad</label>
                        <select name="facultad" id="facultad" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                            <option value="Ciencias administrativas y contables" {{ $programa->facultad == 'Ciencias administrativas y contables' ? 'selected' : '' }}>Ciencias administrativas y contables</option>
                            <option value="Ciencias aplicadas y de la salud" {{ $programa->facultad == 'Ciencias aplicadas y de la salud' ? 'selected' : '' }}>Ciencias aplicadas y de la salud</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="plan_estudios" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Número de Plan de Estudios</label>
                        <input type="number" name="plan_estudios" id="plan_estudios" value="{{ old('plan_estudios', $programa->plan_estudios) }}" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                    </div>

                    <div class="mb-6">
                        <label for="estado" class="block text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Estado</label>
                        <select name="estado" id="estado" class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-[#0b2545] focus:ring-[#0b2545] text-sm py-3" required>
                            <option value="Activo" {{ $programa->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
                            <option value="Inactivo" {{ $programa->estado == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-100">
                        <a href="{{ route('programas.index') }}" class="bg-slate-200 hover:bg-slate-300 text-slate-800 font-extrabold py-2.5 px-5 rounded-xl shadow transition text-sm">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-black py-2.5 px-6 rounded-xl shadow transition text-sm">
                            Actualizar Programa
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>