<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpleadoFactory extends Factory
{
    protected $model = Empleado::class;

    public function definition()
    {
        return [
			'run_empleado' => $this->faker->name,
			'nombre_empleado' => $this->faker->name,
			'apellido_empleado' => $this->faker->name,
			'correo_empleado' => $this->faker->name,
			'clave' => $this->faker->name,
			'estado_empleado' => $this->faker->name,
			'box_id' => $this->faker->name,
			'perfil_sistema_id' => $this->faker->name,
			'especialidad_id' => $this->faker->name,
			'fecha_ingreso' => $this->faker->name,
        ];
    }
}
