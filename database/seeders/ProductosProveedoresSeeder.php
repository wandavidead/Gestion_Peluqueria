<?php

namespace Database\Seeders;

use App\Models\ProductosProveedores;
use Illuminate\Database\Seeder;


class ProductosProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductosProveedores::factory()->times(20)->create();
    }
}
