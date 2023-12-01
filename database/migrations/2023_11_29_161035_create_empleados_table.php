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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('run_empleado');
            $table->string('nombre_empleado');
            $table->string('apellido_empleado');
            $table->string('correo_empleado');
            $table->string('clave');
            $table->string('estado_empleado');
            $table->integer('box_id');
            $table->integer('perfil_sistema_id');
            $table->integer('especialidad_id');
            $table->dateTime('fecha_ingreso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
