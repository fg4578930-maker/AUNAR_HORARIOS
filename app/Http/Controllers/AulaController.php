<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\ProgramaAcademico;
use App\Models\Asignatura;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index()
    {
        $aulas = Aula::with(['programasAcademicos', 'asignaturas'])->get();
        return view('admin.aulas.index', compact('aulas'));
    }

    public function create()
    {
        $programas = ProgramaAcademico::all();
        $asignaturas = Asignatura::all();
        return view('admin.aulas.create', compact('programas', 'asignaturas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'piso' => 'required|integer|in:1,2',
            'capacidad_max' => 'required|integer|min:1',
            'tipo' => 'required|string',
            'es_uso_general' => 'required|boolean',
            'programas_ids' => 'array|max:2', // Máximo 2 programas si es exclusivo
            'asignaturas_ids' => 'array',
        ]);

        $aula = Aula::create([
            'nombre' => $request->nombre,
            'piso' => $request->piso,
            'capacidad_max' => $request->capacidad_max,
            'tipo' => $request->tipo,
            'es_uso_general' => $request->es_uso_general,
        ]);

        if (!$request->es_uso_general && $request->has('programas_ids')) {
            $aula->programasAcademicos()->sync($request->programas_ids);
        }

        if ($request->has('asignaturas_ids')) {
            $aula->asignaturas()->sync($request->asignaturas_ids);
        }

        return redirect()->route('admin.aulas.index')->with('success', '¡Aula o laboratorio creado exitosamente!');
    }

    public function edit(Aula $aula)
    {
        $programas = ProgramaAcademico::all();
        $asignaturas = Asignatura::all();
        return view('admin.aulas.edit', compact('aula', 'programas', 'asignaturas'));
    }

    public function update(Request $request, Aula $aula)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'piso' => 'required|integer|in:1,2',
            'capacidad_max' => 'required|integer|min:1',
            'tipo' => 'required|string',
            'es_uso_general' => 'required|boolean',
            'programas_ids' => 'array|max:2',
            'asignaturas_ids' => 'array',
        ]);

        $aula->update([
            'nombre' => $request->nombre,
            'piso' => $request->piso,
            'capacidad_max' => $request->capacidad_max,
            'tipo' => $request->tipo,
            'es_uso_general' => $request->es_uso_general,
        ]);

        if ($request->es_uso_general) {
            $aula->programasAcademicos()->detach();
        } else {
            $aula->programasAcademicos()->sync($request->input('programas_ids', []));
        }

        $aula->asignaturas()->sync($request->input('asignaturas_ids', []));

        return redirect()->route('admin.aulas.index')->with('success', '¡Aula o laboratorio actualizado exitosamente!');
    }

    public function destroy(Aula $aula)
    {
        $aula->programasAcademicos()->detach();
        $aula->asignaturas()->detach();
        $aula->delete();

        return redirect()->route('admin.aulas.index')->with('success', '¡Aula o laboratorio eliminado exitosamente!');
    }
}