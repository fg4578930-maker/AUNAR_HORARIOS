<?php

namespace App\Http\Controllers;

use App\Models\PlanEstudio;
use App\Models\ProgramaAcademico;
use App\Models\Asignatura;
use Illuminate\Http\Request;

class PlanEstudioController extends Controller
{
    public function index()
    {
        $planes = PlanEstudio::with('programa')->withCount('asignaturas')->orderBy('id', 'desc')->get();
        return view('planes.index', compact('planes'));
    }

    public function create()
    {
        $programas = ProgramaAcademico::where('estado', 'Activo')->orderBy('nombre')->get();
        return view('admin.planes.create', compact('programas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'programa_academico_id' => 'required|exists:programas_academicos,id',
            'tipo' => 'required|string',
            'semestres' => 'required|integer|min:1|max:12',
            'estado' => 'required|string',
        ]);

        PlanEstudio::create($request->all());

        return redirect()->route('planes.index')->with('success', '¡Plan de estudio registrado exitosamente!');
    }

    // Vista de la Malla Curricular (Ver tarjetas por semestre y buscador de asignaturas)
    public function show(Request $request, PlanEstudio $plan)
    {
        $plan->load('programa', 'asignaturas');
        
        $search = $request->input('search');
        $asignaturasDisponibles = Asignatura::when($search, function($query, $search) {
            return $query->where('nombre', 'like', "%{$search}%")
                         ->orWhere('codigo', 'like', "%{$search}%");
        })->orderBy('nombre')->take(15)->get();

        return view('planes.show', compact('plan', 'asignaturasDisponibles', 'search'));
    }

    // Añadir asignatura a un semestre específico de la malla
    public function agregarAsignatura(Request $request, PlanEstudio $plan)
    {
        $request->validate([
            'asignatura_id' => 'required|exists:asignaturas,id',
            'semestre_numero' => 'required|integer|min:1|max:' . $plan->semestres,
        ]);

        // Evita duplicar la misma materia en el mismo plan
        $plan->asignaturas()->syncWithoutDetaching([
            $request->asignatura_id => ['semestre_numero' => $request->semestre_numero]
        ]);

        return redirect()->route('planes.show', $plan->id)->with('success', '¡Asignatura añadida a la malla exitosamente!');
    }

    // Quitar asignatura de la malla
    public function removerAsignatura(PlanEstudio $plan, Asignatura $asignatura)
    {
        $plan->asignaturas()->detach($asignatura->id);
        return redirect()->route('planes.show', $plan->id)->with('success', '¡Asignatura removida de la malla!');
    }

    public function edit(PlanEstudio $plan)
    {
        $programas = ProgramaAcademico::where('estado', 'Activo')->orderBy('nombre')->get();
        return view('admin.planes.edit', compact('plan', 'programas'));
    }

    public function update(Request $request, PlanEstudio $plan)
    {
        $request->validate([
            'programa_academico_id' => 'required|exists:programas_academicos,id',
            'tipo' => 'required|string',
            'semestres' => 'required|integer|min:1|max:12',
            'estado' => 'required|string',
        ]);

        $plan->update($request->all());

        return redirect()->route('planes.index')->with('success', '¡Plan de estudio actualizado exitosamente!');
    }

    public function destroy(PlanEstudio $plan)
    {
        $plan->delete();
        return redirect()->route('planes.index')->with('success', '¡Plan de estudio eliminado exitosamente!');
    }
}