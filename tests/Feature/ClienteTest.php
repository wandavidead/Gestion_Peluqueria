<?php

namespace Tests\Feature;

use App\Models\Clientes;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClienteTest extends TestCase
{
    use WithFaker;
	
    public function testExample()
    {
        /*// Esto es para usar el test con datos a mano
        $response = $this->json('POST', '/taxis', [
			'nombre' => 'Marcos'
			'apellidos' => 'Rodriguez'
			'telefono' => '645372871'
		]);

        $response
            ->assertStatus(302);
		$datos = [
			'nombre' => $this->faker->name,
            'apellidos' => $this->faker->lastName,
            'telefono' => $this->faker->phoneNumber,
		];
        $response = $this->json('POST', '/taxis', $datos );
		
        $response
            ->assertStatus(302);*/
    }
}
