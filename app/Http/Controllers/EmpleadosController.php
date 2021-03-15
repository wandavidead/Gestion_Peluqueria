<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use App\Http\Requests\EmpleadosRequest;

class EmpleadosController extends Controller
{

    public function index()
    {
        return view('empleados.index', ['empleados' => Empleados::all()]);
    }

    public function create()
    {
        return view("empleados.create");
    }

    public function store(EmpleadosRequest $request)
    {
        $datos=$request->all();
		Empleados::create($datos);
		return redirect('/empleados');
    }

    public function show($id)
    {
        return view('empleados.show', ['empleados' => Empleados::find($id)]);
    }

     public function edit($id)
    {
        return view('empleados.update', ['empleados' => Empleados::find($id)]);
    }

    public function update(EmpleadosRequest $request, $id)
    {
        $datos=$request->all();
		Empleados::find($id)->update($datos);
		return redirect('/empleados');
    }

    public function destroy($id)
    {
        Empleados::find($id)->delete();
		return redirect('/empleados');
    }
}
