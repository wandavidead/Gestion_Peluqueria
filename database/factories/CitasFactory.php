<?php

namespace Database\Factories;

use App\Models\Citas;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
         	'fecha_cita' => $this->faker->dateTimeBetween('now', '+30 years'),
            'cliente_id' => $this->faker->numberbetween(1,20),
			'empleado_id' => $this->faker->numberbetween(1,20),
        ];
    }
}
