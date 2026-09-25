<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    // Consulta general (Disponible para Administrador y Usuario Regular)
    public function index()
    {
        $programas = Programa::all();

        return view('programas.index', compact('programas'));
    }

    public function show(Programa $programa)
    {
        return view('programas.show', compact('programa'));
    }

    // Métodos exclusivos de gestión (CRUD - Solo Administrador)
    public function create()
    {
        return view('programas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:programas,codigo',
            'nombre' => 'required|string|max:255',
            'facultad' => 'required|string|max:255',
            'plan_estudios' => 'required|integer',
            'estado' => 'required|string',
        ]);

        Programa::create($request->all());

        return redirect()->route('programas.index')->with('success', 'Programa académico creado correctamente.');
    }

    public function edit(Programa $programa)
    {
        return view('programas.edit', compact('programa'));
    }

    public function update(Request $request, Programa $programa)
    {
        $request->validate([
            'codigo' => 'required|unique:programas,codigo,'.$programa->id,
            'nombre' => 'required|string|max:255',
            'facultad' => 'required|string|max:255',
            'plan_estudios' => 'required|integer',
            'estado' => 'required|string',
        ]);

        $programa->update($request->all());

        return redirect()->route('programas.index')->with('success', 'Programa académico actualizado con éxito.');
    }

    public function destroy(Programa $programa)
    {
        $programa->delete();

        return redirect()->route('programas.index')->with('success', 'Programa académico eliminado.');
    }
}
