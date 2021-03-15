<?php

namespace Database\Factories;

use App\Models\Empleados;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleados::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           	'nombre' => $this->faker->name,
            'apellidos' => $this->faker->lastName,
            'direccion' => $this->faker->address,
			'email' => $this->faker->email,
			'dni' => $this->faker->dni(),
			'telefono' => $this->faker->phoneNumber,
        ];
    }
}
