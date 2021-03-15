<?php

namespace Database\Factories;

use App\Models\ProductosProveedores;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductosProveedoresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductosProveedores::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto_id' => $this->faker->numberbetween(1,20),
            'proveedor_id' => $this->faker->numberbetween(1,20),
        ];
    }
}
