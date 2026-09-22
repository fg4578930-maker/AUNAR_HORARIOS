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

    // Relación futura con planes de estudio (retorna 0 temporalmente)
    public function getPlanesEstudioCountAttribute()
    {
        // Cuando creemos el módulo de planes de estudio, se conectará aquí:
        // return $this->planesEstudio()->count();
        return 0; 
    }
}