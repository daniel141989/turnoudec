<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id('matricula');
            $table->string('run_estudiante');
            $table->string('nombre_estudiante');
            $table->string('apellido_estudiante');
            $table->string('correo_estudiante');
            $table->string('carrera');
            $table->string('sede');
            $table->string('estado_matricula');
            $table->dateTime('fecha_ingreso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
