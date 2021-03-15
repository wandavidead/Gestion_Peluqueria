<?php

namespace Database\Seeders;

use App\Models\CitasTratamientos;
use Illuminate\Database\Seeder;

class CitasTratamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CitasTratamientos::factory()->times(20)->create();
    }
}
