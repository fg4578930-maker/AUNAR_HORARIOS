<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
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
        ]);

        Asignatura::create($request->all());

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
        ]);

        $asignatura->update($request->all());

        return redirect()->route('asignaturas.index')->with('success', '¡Asignatura actualizada exitosamente!');
    }

    public function destroy(Asignatura $asignatura)
    {
        $asignatura->delete();
        return redirect()->route('asignaturas.index')->with('success', '¡Asignatura eliminada exitosamente!');
    }
}