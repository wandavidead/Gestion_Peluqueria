<?php

namespace Database\Seeders;

use App\Models\Tratamientos;
use Illuminate\Database\Seeder;

class TratamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tratamientos::factory()->times(20)->create();
    }
}
