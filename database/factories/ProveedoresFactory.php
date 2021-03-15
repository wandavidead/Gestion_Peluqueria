<?php

namespace Database\Factories;

use App\Models\Proveedores;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedoresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proveedores::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'denominacion_social' => $this->faker->randomElement(['Tahe', 'Lóréal', 'Schwarzkopf', 'Revlon', 'Well']),
            'direccion' => $this->faker->address,
			'telefono' => $this->faker->phoneNumber,
        ];
    }
}
