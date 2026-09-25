<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique(); // Ej: 102519
            $table->string('nombre');           // Ej: Administración De Empresas
            $table->string('facultad');        // Ej: Ciencias administrativas y contables
            $table->integer('plan_estudios');   // Número de plan de estudios
            $table->string('estado')->default('Activo'); // Estado del programa
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};
