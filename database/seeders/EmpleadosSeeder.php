<?php

namespace Database\Seeders;

use App\Models\Empleados;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empleados::factory()->times(20)->create();
    }
}
