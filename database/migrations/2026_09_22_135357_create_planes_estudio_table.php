<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('planes_estudio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programa_academico_id')->constrained('programas_academicos')->onDelete('cascade');
            $table->string('tipo'); // Nuevo, Antiguo
            $table->integer('semestres'); // Número de semestres (ej. 6, 8, 9)
            $table->string('estado')->default('Activo'); // Activo, Inactivo
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('planes_estudio');
    }
};