<?php

namespace App\Http\Controllers;

use App\Models\Tratamientos;
use App\Models\Productos;
use App\Models\TratamientoProducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TratamientosController extends Controller
{

    public function index()
    {
        return view('tratamientos.index', ['tratamientos' => Tratamientos::all()]);
    }

    public function create()
    {
        return view("tratamientos.create", ['error' => false,'productos' => Productos::all()]);
    }

    public function store(Request $request)
    {
		$validatedData = $request->validate([
                'denominacion' => 'required | min:5 | max:100',
                'precio' => 'required',
				'producto_id' => 'required',
            ]);
		$validatedData = $request->except('producto_id');
		$crearRelacion = $request->only('producto_id');
		$idproducto = $request->only('producto_id');
		DB::beginTransaction();
		try {
			$data=Tratamientos::create($validatedData);
			$crearRelacion['tratamiento_id']=$data->id;
			TratamientoProducto::create($crearRelacion);
			$producto=Productos::find($idproducto);
			Productos::where('id', $idproducto)->update(array('cantidad' => $producto[0]->cantidad - 1));
			DB::commit();
			return redirect('/tratamientos')->with("añadir_tratamiento",'El tratamiento se ha creado correctamente!.');
   		} catch (\Exception $e){
			dd($e);
			DB::rollback();
			return view('tratamientos.create', ['error' => true,'empleados' => Empleados::all()]);
   		}
    }

    public function show($id)
    {
        return view('tratamientos.show', ['tratamientos' => Tratamientos::find($id)]);
    }

    public function edit($id)
    {
		$data=TratamientoProducto::where('tratamiento_id', $id)->get('producto_id');
        return view('tratamientos.update', ['tratamientos' => Tratamientos::find($id),'datos' => $data[0]->producto_id,'productos' => Productos::all()]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
                'denominacion' => 'required | min 5 | max 100',
                'precio' => 'required | between:3,159.99',
            ]);
		Tratamientos::find($id)->update($validatedData);
		return redirect('/tratamientos')->with("editar_tratamiento",'El tratamiento se ha editado correctamente!.');
    }

    public function destroy($id)
    {
        Tratamientos::find($id)->delete();
		return redirect('/tratamientos');
    }
}
