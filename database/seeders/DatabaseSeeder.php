<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
		$this->call(ClientesSeeder::class);
		$this->call(EmpleadosSeeder::class);
		$this->call(CitasSeeder::class);
		$this->call(ProductosSeeder::class);
		$this->call(ProveedoresSeeder::class);
		$this->call(ProductosProveedoresSeeder::class);
		$this->call(TratamientosSeeder::class);
		$this->call(CitasTratamientosSeeder::class);
		$this->call(TratamientoProductoSeeder::class);

    }
}
