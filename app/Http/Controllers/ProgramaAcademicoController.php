<?php

namespace App\Http\Controllers;

use App\Models\ProgramaAcademico;
use Illuminate\Http\Request;

class ProgramaAcademicoController extends Controller
{
    public function index()
    {
        // Conteo dinámico de planes de estudio asociados
        $programas = ProgramaAcademico::withCount('planesEstudio')->get();
        
        return view('programas.index', compact('programas'));
    }

    public function create()
    {
        return view('admin.programas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string|max:50|unique:programas_academicos,codigo',
            'nombre' => 'required|string|max:255',
            'facultad' => 'required|string|max:255',
            'estado' => 'required|string',
        ]);

        ProgramaAcademico::create($request->all());

        // CORRECCIÓN: Apuntando a la ruta correcta sin el prefijo 'admin.' (cámbiala si tu ruta usa otro nombre)
        return redirect()->route('programas.index')->with('success', '¡Programa académico creado exitosamente!');
    }

    public function edit(ProgramaAcademico $programa)
    {
        return view('admin.programas.edit', compact('programa'));
    }

    public function update(Request $request, ProgramaAcademico $programa)
    {
        $request->validate([
            'codigo' => 'required|string|max:50|unique:programas_academicos,codigo,' . $programa->id,
            'nombre' => 'required|string|max:255',
            'facultad' => 'required|string|max:255',
            'estado' => 'required|string',
        ]);

        $programa->update($request->all());

        return redirect()->route('programas.index')->with('success', '¡Programa académico actualizado exitosamente!');
    }

    public function destroy(ProgramaAcademico$programa)
    {
        $programa->delete();
        
        return redirect()->route('programas.index')->with('success', '¡Programa académico eliminado exitosamente!');
    }
}