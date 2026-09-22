<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plan_estudio_asignatura', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_estudio_id')->constrained('planes_estudio')->onDelete('cascade');
            $table->foreignId('asignatura_id')->constrained('asignaturas')->onDelete('cascade');
            $table->integer('semestre_numero'); // Número del semestre al que pertenece la materia (1, 2, 3...)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plan_estudio_asignatura');
    }
};