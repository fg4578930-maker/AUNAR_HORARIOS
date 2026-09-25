<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamamos a nuestro seeder de administrador
        $this->call(AdminUserSeeder::class);

<<<<<<< HEAD
        $this->call(DocenteSeeder::class);

        $this->call(ProgramaSeeder::class);

        $this->call(AsignaturaSeeder::class);

=======
        $this->call([
        DocenteSeeder::class,
        AsignaturaSeeder::class, // <-- Añadido aquí
    ]);
>>>>>>> e19adb0302a3d9df8fa0db52c66ea567444aa52d
    }
}
