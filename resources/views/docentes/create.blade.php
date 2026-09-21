<x-app-layout>
    <div class="min-h-screen bg-slate-100 py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100 p-8">
                
                <div class="mb-6 border-b pb-4">
                    <h2 class="text-xl font-bold text-slate-800">Registrar Nuevo Docente</h2>
                    <p class="text-sm text-slate-500">Los campos vacíos de correo y celular se asignarán automáticamente como 'Pendiente'.</p>
                </div>

                @if ($errors->any())
                    <div class="mb-4 bg-rose-100 border-l-4 border-rose-500 text-rose-700 p-4 rounded-r text-sm">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>- {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.docentes.store') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Número de Documento *</label>
                        <input type="text" name="documento" value="{{ old('documento') }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" placeholder="Ej. 11223344" />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Nombre Completo *</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" placeholder="Ej. Juan Carlos Méndez" />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Correo Institucional (Opcional)</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" placeholder="docente@aunar.edu.co" />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Número de Celular (Opcional)</label>
                        <input type="text" name="celular" value="{{ old('celular') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm" placeholder="3110000000" />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Tipo de Vinculación *</label>
                        <select name="vinculacion" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-[#0b2545] text-sm">
                            <option value="pendiente">Pendiente</option>
                            <option value="tiempo completo">Tiempo Completo</option>
                            <option value="medio tiempo">Medio Tiempo</option>
                            <option value="hora catedra">Hora Cátedra</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end space-x-3 pt-4 border-t">
                        <a href="{{ route('docentes.index') }}" class="text-sm font-semibold text-slate-600 hover:underline">Cancelar</a>
                        <button type="submit" class="bg-[#0b2545] hover:bg-slate-800 text-white font-bold px-6 py-2.5 rounded-xl shadow-md text-sm transition">
                            Guardar Docente
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>