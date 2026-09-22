<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanEstudio extends Model
{
    use HasFactory;

    protected $table = 'planes_estudio';

    protected $fillable = [
        'programa_academico_id',
        'tipo',
        'semestres',
        'estado',
    ];

    public function programa()
    {
        return $this->belongsTo(ProgramaAcademico::class, 'programa_academico_id');
    }

    // Relación con las asignaturas a través de la tabla pivote, incluyendo el semestre
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'plan_estudio_asignatura', 'plan_estudio_id', 'asignatura_id')
                    ->withPivot('semestre_numero')
                    ->withTimestamps();
    }
}