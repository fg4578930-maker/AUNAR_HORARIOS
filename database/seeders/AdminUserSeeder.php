<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@admin.com'], // Criterio de búsqueda
            [
                'name' => 'Administrador General',
                'role' => 'admin', // Asignamos el rol de administrador
                'password' => Hash::make('12345678'), // Contraseña por defecto
            ]
        );
    }
}