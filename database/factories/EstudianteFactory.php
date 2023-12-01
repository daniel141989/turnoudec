<?php

namespace Database\Factories;

use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EstudianteFactory extends Factory
{
    protected $model = Estudiante::class;

    public function definition()
    {
        return [
			'matricula' => $this->faker->name,
			'run_estudiante' => $this->faker->name,
			'nombre_estudiante' => $this->faker->name,
			'apellido_estudiante' => $this->faker->name,
			'correo_estudiante' => $this->faker->name,
			'carrera' => $this->faker->name,
			'sede' => $this->faker->name,
			'estado_matricula' => $this->faker->name,
			'fecha_ingreso' => $this->faker->name,
        ];
    }
}
