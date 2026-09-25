<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignaturas';

    protected $fillable = [
        'programa_id',
        'codigo',
        'nombre',
        'plan_estudios',
        'semestre',
        'creditos',
        'tipo',
        'estado',
    ];

    // Relación: Una asignatura pertenece a un programa académico
    public function programa()
    {
        return $this->belongsTo(Programa::class);
    }
}
