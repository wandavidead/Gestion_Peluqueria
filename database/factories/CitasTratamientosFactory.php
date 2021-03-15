<?php

namespace Database\Factories;

use App\Models\CitasTratamientos;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitasTratamientosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CitasTratamientos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cita_id' => $this->faker->numberbetween(1,20),
            'tratamiento_id' => $this->faker->numberbetween(1,20),
        ];
    }
}
