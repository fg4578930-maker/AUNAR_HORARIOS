<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramaAcademico extends Model
{
    use HasFactory;

    protected $table = 'programas_academicos';

    protected $fillable = [
        'codigo',
        'nombre',
        'facultad',
        'estado',
    ];

    /**
     * Relación uno a muchos con los planes de estudio.
     * Utiliza 'programa_academico_id' como llave foránea y 'id' como llave primaria.
     */
    public function planesEstudio()
    {
        return $this->hasMany(PlanEstudio::class, 'programa_academico_id', 'id');
    }
}