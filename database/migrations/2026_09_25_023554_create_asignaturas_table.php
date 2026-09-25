<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            // Relación con el programa académico
            $table->foreignId('programa_id')->constrained('programas')->onDelete('cascade');
            $table->string('codigo')->unique(); // Código único de la asignatura
            $table->string('nombre');           // Nombre de la materia
            $table->string('plan_estudios');    // 'Antiguo' o 'Nuevo'
            $table->integer('semestre');        // Número de semestre (1 al 9)
            $table->integer('creditos');        // Número de créditos
            $table->string('tipo');             // Teórico, Teórico-Práctico, Práctico
            $table->string('estado')->default('Activo'); // Estado
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asignaturas');
    }
};
