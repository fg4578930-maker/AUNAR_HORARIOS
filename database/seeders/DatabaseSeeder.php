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

        $this->call([
        DocenteSeeder::class,
        AsignaturaSeeder::class, // <-- Añadido aquí
    ]);
    }
}