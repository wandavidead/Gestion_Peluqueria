<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\login;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function login(Request $request)
    {
		$datos = $request->all();
		if ($datos['usuario']){
			return $usuario = new login(Usuarios::where('usuario', '=' ,$datos['usuario'])->where('contraseña', '=' ,$datos['contrasena'])->get());
		}
    }
	
		public function register(Request $request)
    {
		$request['usuario'] = strtolower($request['usuario']);
		if(Usuarios::where('usuario',$request['usuario'])->exists()){
			return ["error"=>true];
		}
		 return Usuarios::create($request->all());
		
    }
}
