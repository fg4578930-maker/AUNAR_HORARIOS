<?php

namespace App\Http\Controllers;

use App\Models\PeriodoAcademico;
use Illuminate\Http\Request;

class PeriodoAcademicoController extends Controller
{
    public function index()
    {
        $periodos = PeriodoAcademico::orderBy('anio', 'desc')->orderBy('periodo', 'desc')->get();
        return view('periodos.index', compact('periodos'));
    }

    public function create()
    {
        return view('admin.periodos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'periodo' => 'required|string|max:50',
            'anio' => 'required|digits:4',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'estado' => 'required|string',
        ]);

        PeriodoAcademico::create($request->all());

        return redirect()->route('periodos.index')->with('success', '¡Periodo académico creado exitosamente!');
    }

    public function edit(PeriodoAcademico $periodo)
    {
        return view('admin.periodos.edit', compact('periodo'));
    }

    public function update(Request $request, PeriodoAcademico $periodo)
    {
        $request->validate([
            'periodo' => 'required|string|max:50',
            'anio' => 'required|digits:4',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'estado' => 'required|string',
        ]);

        $periodo->update($request->all());

        return redirect()->route('periodos.index')->with('success', '¡Periodo académico actualizado exitosamente!');
    }

    public function destroy(PeriodoAcademico $periodo)
    {
        $periodo->delete();
        return redirect()->route('periodos.index')->with('success', '¡Periodo académico eliminado exitosamente!');
    }
}