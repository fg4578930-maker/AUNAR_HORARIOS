<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('documento')->unique(); // Documento único
            $table->string('nombre'); // Nombre completo
            $table->string('email')->default('Pendiente'); // Correo institucional
            $table->string('celular')->default('Pendiente'); // Celular
            $table->enum('vinculacion', ['tiempo completo', 'medio tiempo', 'hora catedra', 'pendiente'])->default('pendiente'); // Tipo de vinculación
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};