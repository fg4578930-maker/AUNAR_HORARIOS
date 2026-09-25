<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignaturas';

    protected $fillable = [
<<<<<<< HEAD
        'programa_id',
        'codigo',
        'nombre',
        'plan_estudios',
        'semestre',
=======
        'codigo',
        'nombre',
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
        'creditos',
        'tipo',
        'estado',
    ];
<<<<<<< HEAD

    // Relación: Una asignatura pertenece a un programa académico
    public function programa()
    {
        return $this->belongsTo(Programa::class);
    }
}
=======
}
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
