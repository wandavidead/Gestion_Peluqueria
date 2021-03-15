<?php

namespace Database\Seeders;

use App\Models\Citas;
use Illuminate\Database\Seeder;

class CitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Citas::factory()->times(20)->create();
    }
}
