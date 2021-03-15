<?php

namespace Database\Factories;

use App\Models\TratamientoProducto;
use Illuminate\Database\Eloquent\Factories\Factory;

class TratamientoProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TratamientoProducto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto_id' => $this->faker->numberbetween(1,20),
            'tratamiento_id' => $this->faker->numberbetween(1,20),
        ];
    }
}
