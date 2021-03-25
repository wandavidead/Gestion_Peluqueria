<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index()
    {
        return view('clientes.index', ['clientes' => Clientes::all()]);
    }

    public function create()
    {
        return view("clientes.create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required | min:3 | max:50',
            'apellidos' => 'required | min:3 | max:100 ',
            'telefono' => 'required',
        ]);
		
		Clientes::create($validatedData);
		return redirect('/clientes')->with("añadir_cliente",'El cliente se ha creado correctamente!.');
    }

    public function show($id)
    {
        return view('clientes.show', ['clientes' => Clientes::find($id)]);
    }

    public function edit($id)
    {
        return view('clientes.update', ['clientes' => Clientes::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:50',
            'apellidos' => 'required|max:100',
            'telefono' => 'required',
        ]);
		Clientes::find($id)->update($validatedData);
		return redirect('/clientes')->with("editar_cliente",'El cliente se ha editado correctamente!.');
    }

    public function destroy($id)
    {
        Clientes::find($id)->delete();
		return redirect('/clientes');
    }
}
