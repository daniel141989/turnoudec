<?php

namespace Database\Factories;

use App\Models\Especialidad;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EspecialidadFactory extends Factory
{
    protected $model = Especialidad::class;

    public function definition()
    {
        return [
			'nombre_especialidad' => $this->faker->name,
			'letra_especialidad' => $this->faker->name,
			'estado_especialidad' => $this->faker->name,
			'fecha_ingreso' => $this->faker->name,
        ];
    }
}
