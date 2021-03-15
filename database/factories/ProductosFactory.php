<?php

namespace Database\Factories;

use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Productos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
			'denominacion_producto' => $this->faker->randomElement(['Tijeras', 'Pinzas', 'Peine de Púa', 'Peine de corte', 'Peine de desenredar', 'Cepillo redondo', 'Secador', 'Plancha', 'Tintes', 'Lacas ', 'acondicionadores', 'tratamientos', 'Champús', 'Gomina']),
            'marca' => $this->faker->randomElement(['Tahe', 'Lóréal', 'Schwarzkopf', 'Revlon', 'Well']),
            'precio' => $this->faker->randomFloat(2, 0.00, 99.99),
			'fecha_cadu' => $this->faker->dateTimeBetween('now', '+3 years'),
			'cantidad' => $this->faker->numberBetween(0,100),
			'categoria_id' => $this->faker->numberBetween(1,4),
        ];
    }
}
