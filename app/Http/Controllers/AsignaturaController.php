<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Programa;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Muestra el listado de asignaturas con filtros opcionales (Programa, Plan de Estudios y Semestre).
     */
    public function index(Request $request)
    {
        $programas = Programa::where('estado', 'Activo')->get();

        $query = Asignatura::with('programa');

        // Filtro por programa académico
        if ($request->filled('programa_id')) {
            $query->where('programa_id', $request->programa_id);
        }

        // Filtro por plan de estudios ('Antiguo' o 'Nuevo')
        if ($request->filled('plan_estudios')) {
            $query->where('plan_estudios', $request->plan_estudios);
        }

        // Filtro por semestre
        if ($request->filled('semestre')) {
            $query->where('semestre', $request->semestre);
        }

        $asignaturas = $query->paginate(15)->withQueryString();

        return view('asignaturas.index', compact('asignaturas', 'programas'));
    }

    /**
     * Muestra el formulario para crear una nueva asignatura (Exclusivo Administrador).
     */
    public function create()
    {
        $programas = Programa::where('estado', 'Activo')->get();

        return view('asignaturas.create', compact('programas'));
    }

    /**
     * Almacena una nueva asignatura en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'programa_id' => 'required|exists:programas,id',
            'codigo' => 'required|string|unique:asignaturas,codigo',
            'nombre' => 'required|string|max:255',
            'plan_estudios' => 'required|in:Antiguo,Nuevo',
            'semestre' => 'required|integer|min:1|max:10',
            'creditos' => 'required|integer|min:1',
            'tipo' => 'required|string|max:100',
            'estado' => 'required|in:Activo,Inactivo',
        ]);

        Asignatura::create($request->all());

        return redirect()->route('asignaturas.index')->with('success', '¡Asignatura creada exitosamente!');
    }

    /**
     * Muestra el detalle de una asignatura específica.
     */
    public function show(Asignatura $asignatura)
    {
        return view('asignaturas.show', compact('asignatura'));
    }

    /**
     * Muestra el formulario de edición de una asignatura (Exclusivo Administrador).
     */
    public function edit(Asignatura $asignatura)
    {
        $programas = Programa::where('estado', 'Activo')->get();

        return view('asignaturas.edit', compact('asignatura', 'programas'));
    }

    /**
     * Actualiza la asignatura en la base de datos.
     */
    public function update(Request $request, Asignatura $asignatura)
    {
        $request->validate([
            'programa_id' => 'required|exists:programas,id',
            'codigo' => 'required|string|unique:asignaturas,codigo,'.$asignatura->id,
            'nombre' => 'required|string|max:255',
            'plan_estudios' => 'required|in:Antiguo,Nuevo',
            'semestre' => 'required|integer|min:1|max:10',
            'creditos' => 'required|integer|min:1',
            'tipo' => 'required|string|max:100',
            'estado' => 'required|in:Activo,Inactivo',
        ]);

        $asignatura->update($request->all());

        return redirect()->route('asignaturas.index')->with('success', '¡Asignatura actualizada correctamente!');
    }

    /**
     * Elimina una asignatura de la base de datos (Exclusivo Administrador).
     */
    public function destroy(Asignatura $asignatura)
    {
        $asignatura->delete();

        return redirect()->route('asignaturas.index')->with('success', '¡Asignatura eliminada correctamente!');
    }

    /**
     * Endpoint API JSON para autocompletar el código y la facultad al seleccionar un programa.
     */
    public function getProgramaInfo($id)
    {
        $programa = Programa::find($id);
        if ($programa) {
            return response()->json([
                'codigo' => $programa->codigo,
                'facultad' => $programa->facultad,
            ]);
        }

        return response()->json(['error' => 'Programa no encontrado'], 404);
    }
}
