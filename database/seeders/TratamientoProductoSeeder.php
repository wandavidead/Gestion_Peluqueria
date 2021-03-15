<?php

namespace Database\Seeders;

use App\Models\TratamientoProducto;
use Illuminate\Database\Seeder;

class TratamientoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TratamientoProducto::factory()->times(20)->create();
    }
}
