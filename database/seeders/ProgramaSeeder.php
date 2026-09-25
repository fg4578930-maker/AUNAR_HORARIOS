<?php

namespace Database\Seeders;

use App\Models\Programa;
use Illuminate\Database\Seeder;

class ProgramaSeeder extends Seeder
{
    public function run(): void
    {
        $programas = [
            [
                'codigo' => '102519',
                'nombre' => 'Administración De Empresas',
                'facultad' => 'Ciencias administrativas y contables',
                'plan_estudios' => 2,
                'estado' => 'Activo',
            ],
            [
                'codigo' => '102322',
                'nombre' => 'Contaduría Pública',
                'facultad' => 'Ciencias administrativas y contables',
                'plan_estudios' => 1,
                'estado' => 'Activo',
            ],
            [
                'codigo' => '109036',
                'nombre' => 'Diseño Visual',
                'facultad' => 'Ciencias aplicadas y de la salud',
                'plan_estudios' => 1,
                'estado' => 'Activo',
            ],
            [
                'codigo' => '102883',
                'nombre' => 'Ingeniería Informática',
                'facultad' => 'Ciencias aplicadas y de la salud',
                'plan_estudios' => 2,
                'estado' => 'Activo',
            ],
            [
                'codigo' => '104600',
                'nombre' => 'Profesional en Seguridad y Salud en el Trabajo',
                'facultad' => 'Ciencias aplicadas y de la salud',
                'plan_estudios' => 1,
                'estado' => 'Activo',
            ],
            [
                'codigo' => '110609',
                'nombre' => 'Tecnología en Gestión de la Seguridad y Salud en el Trabajo',
                'facultad' => 'Ciencias aplicadas y de la salud',
                'plan_estudios' => 1,
                'estado' => 'Activo',
            ],
            [
                'codigo' => '110106',
                'nombre' => 'Tecnología en Decoración de Interiores',
                'facultad' => 'Ciencias aplicadas y de la salud',
                'plan_estudios' => 1,
                'estado' => 'Activo',
            ],
        ];

        foreach ($programas as $prog) {
            Programa::updateOrCreate(['codigo' => $prog['codigo']], $prog);
        }
    }
}
