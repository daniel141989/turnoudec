<?php

namespace Database\Factories;

use App\Models\Turno;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TurnoFactory extends Factory
{
    protected $model = Turno::class;

    public function definition()
    {
        return [
			'numero_atencion' => $this->faker->name,
			'letra_atencion' => $this->faker->name,
			'empleadoid' => $this->faker->name,
			'boxid' => $this->faker->name,
			'matriculaid' => $this->faker->name,
			'especialidadid' => $this->faker->name,
			'tiempo_ingreso' => $this->faker->name,
			'tiempo_atender' => $this->faker->name,
			'tiempo_salida' => $this->faker->name,
			'estado_turno' => $this->faker->name,
        ];
    }
}
