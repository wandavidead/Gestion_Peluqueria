<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\makeOrder;
use App\Models\Pedidos;
use App\Models\PedidosProductos;

class PedidosController extends Controller
{
    public function pedidos(Request $request)
    {
		$pedidos = $request->except('datos');
		$datos = $request->only('datos');

		$devuelto = Pedidos::create($pedidos);
		foreach ( $datos['datos'] as $dato ){
			$pedido=[
				"pedido_id" => $devuelto['id'],
				"producto_id" => $dato['id'],
				"cantidad" => $dato['cantidad']
				
			];
			PedidosProductos::create($pedido);
		}
		
    }
}
