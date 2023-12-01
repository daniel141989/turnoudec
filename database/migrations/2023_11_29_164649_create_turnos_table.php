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
        Schema::create('turnos', function (Blueprint $table) {
            $table->id(); //id_turno
            $table->integer('numero_atencion');
            $table->string('letra_atencion');
            $table->integer('empleadoid');
            $table->integer('boxid');
            $table->integer('matriculaid');
            $table->integer('especialidadid');
            $table->Time('tiempo_ingreso');
            $table->Time('tiempo_atender');
            $table->Time('tiempo_salida');
            $table->string('estado_turno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos');
    }
};
