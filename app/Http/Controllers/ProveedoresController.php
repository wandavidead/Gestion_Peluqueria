<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{

    public function index()
    {
        return view('proveedores.index', ['proveedores' => Proveedores::all()]);
    }

    public function create()
    {
        return view("proveedores.create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'denominacion_social' => 'required|max:100',
            'direccion' => 'required|max:100',
            'telefono' => 'required',
        ]);
		
		Proveedores::create($validatedData);
		return redirect('/proveedores');
    }

    public function show($id)
    {
        return view('proveedores.show', ['proveedores' => Proveedores::find($id)]);
    }

    public function edit($id)
    {
        return view('proveedores.update', ['proveedores' => Proveedores::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'denominacion_social' => 'max:100',
            'direccion' => 'required|max:100',
            'telefono' => 'required',
        ]);
		Proveedores::find($id)->update($validatedData);
		return redirect('/proveedores');
    }

    public function destroy($id)
    {
        Proveedores::find($id)->delete();
		return redirect('/proveedores');
    }
}
