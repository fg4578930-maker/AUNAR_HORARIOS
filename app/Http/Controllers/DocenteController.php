<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller
{
    /**
     * Muestra el listado de docentes con barra de búsqueda.
     */
    public function index(Request $request)
    {
        $busqueda = $request->input('busqueda');

        $docentes = Docente::when($busqueda, function ($query, $busqueda) {
            return $query->where('nombre', 'like', "%{$busqueda}%")
                         ->orWhere('documento', 'like', "%{$busqueda}%");
        })->latest()->paginate(10);

        return view('docentes.index', compact('docentes', 'busqueda'));
    }

    /**
     * Muestra el formulario para crear un docente (Solo Admin).
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Almacena el nuevo docente en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'documento' => ['required', 'string', 'max:50', 'unique:docentes'],
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'celular' => ['nullable', 'string', 'max:50'],
            'vinculacion' => ['required', 'in:tiempo completo,medio tiempo,hora catedra,pendiente'],
        ]);

        Docente::create([
            'documento' => $request->documento,
            'nombre' => $request->nombre,
            'email' => filled($request->email) ? $request->email : 'Pendiente',
            'celular' => filled($request->celular) ? $request->celular : 'Pendiente',
            'vinculacion' => $request->vinculacion,
        ]);

        return redirect()->route('docentes.index')->with('success', '¡Docente registrado exitosamente!');
    }

    /**
     * Muestra el formulario de edición (Solo Admin).
     */
    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    /**
     * Actualiza la información del docente.
     */
    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'documento' => ['required', 'string', 'max:50', 'unique:docentes,documento,' . $docente->id],
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'celular' => ['nullable', 'string', 'max:50'],
            'vinculacion' => ['required', 'in:tiempo completo,medio tiempo,hora catedra,pendiente'],
        ]);

        $docente->update([
            'documento' => $request->documento,
            'nombre' => $request->nombre,
            'email' => filled($request->email) ? $request->email : 'Pendiente',
            'celular' => filled($request->celular) ? $request->celular : 'Pendiente',
            'vinculacion' => $request->vinculacion,
        ]);

        return redirect()->route('docentes.index')->with('success', '¡Docente actualizado exitosamente!');
    }

    /**
     * Elimina un docente del sistema (Solo Admin).
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index')->with('success', '¡Docente eliminado correctamente!');
    }
}