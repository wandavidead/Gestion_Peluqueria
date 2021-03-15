<?php

namespace Database\Factories;

use App\Models\Tratamientos;
use Illuminate\Database\Eloquent\Factories\Factory;

class TratamientosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tratamientos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'denominacion' => $this->faker->randomElement(['Tijeras', 'Pinzas', 'Peine de Púa', 'Peine de corte', 'Peine de desenredar', 'Cepillo redondo', 'Secador', 'Plancha', 'Tintes', 'Lacas ', 'acondicionadores', 'tratamientos', 'Champús', 'Gomina']),
            'precio' => $this->faker->randomFloat(2, 0.00, 99.99),
			
        ];
    }
}
