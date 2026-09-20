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
        User::create([
            'name' => 'Administrador General',
            'email' => 'admin@admin.com',
            'role' => 'admin', // <-- Asignamos el rol de administrador
            'password' => Hash::make('12345678'), // Contraseña segura por defecto
        ]);
    }
}