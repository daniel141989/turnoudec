<?php

namespace Database\Factories;

use App\Models\Box;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BoxFactory extends Factory
{
    protected $model = Box::class;

    public function definition()
    {
        return [
			'nombre_box' => $this->faker->name,
			'id_estado_box' => $this->faker->name,
        ];
    }
}
