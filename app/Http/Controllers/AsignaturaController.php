<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
<<<<<<< HEAD
use App\Models\Programa;
=======
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
<<<<<<< HEAD
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
=======
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $asignaturas = Asignatura::when($search, function ($query, $search) {
            return $query->where('nombre', 'like', "%{$search}%")
                         ->orWhere('codigo', 'like', "%{$search}%");
        })->orderBy('nombre')->get();

        return view('asignaturas.index', compact('asignaturas', 'search'));
    }

    public function create()
    {
        return view('admin.asignaturas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string|max:50|unique:asignaturas,codigo',
            'nombre' => 'required|string|max:255',
            'creditos' => 'required|integer|min:1|max:10',
            'tipo' => 'required|string',
            'estado' => 'required|string',
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
        ]);

        Asignatura::create($request->all());

<<<<<<< HEAD
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
=======
        return redirect()->route('asignaturas.index')->with('success', '¡Asignatura registrada exitosamente!');
    }

    public function edit(Asignatura $asignatura)
    {
        return view('admin.asignaturas.edit', compact('asignatura'));
    }

    public function update(Request $request, Asignatura $asignatura)
    {
        $request->validate([
            'codigo' => 'required|string|max:50|unique:asignaturas,codigo,' . $asignatura->id,
            'nombre' => 'required|string|max:255',
            'creditos' => 'required|integer|min:1|max:10',
            'tipo' => 'required|string',
            'estado' => 'required|string',
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
        ]);

        $asignatura->update($request->all());

<<<<<<< HEAD
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
=======
        return redirect()->route('asignaturas.index')->with('success', '¡Asignatura actualizada exitosamente!');
    }

    public function destroy(Asignatura $asignatura)
    {
        $asignatura->delete();
        return redirect()->route('asignaturas.index')->with('success', '¡Asignatura eliminada exitosamente!');
    }
}
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
