<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $table = 'aulas';

    protected $fillable = [
        'nombre',
        'piso',
        'capacidad_max',
        'tipo',
        'es_uso_general',
    ];

    // Relación de exclusividad con Programas Académicos (máximo 1 o 2)
    public function programasAcademicos()
    {
        return $this->belongsToMany(ProgramaAcademico::class, 'aula_programa_academico', 'aula_id', 'programa_academico_id');
    }

    // Relación de prioridades con Asignaturas
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'aula_asignatura', 'aula_id', 'asignatura_id');
    }
}