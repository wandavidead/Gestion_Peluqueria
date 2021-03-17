<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\CitasTratamientos;
use App\Models\Clientes;
use App\Models\Empleados;
use App\Models\Tratamientos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class CitasController extends Controller
{
	public function generatePDF()
    {
		$data = Citas::select('citas.fecha_cita','cl.nombre as nombrecl','cl.apellidos as apellidoscl','e.nombre as nombree','e.apellidos as apellidose','t.denominacion')
            ->join('clientes as cl', 'citas.cliente_id', '=', 'cl.id')
			->join('empleados as e', 'citas.empleado_id', '=', 'e.id')
            ->join('citas_tratamientos as ct', 'citas.id', '=', 'ct.cita_id')
			->join('tratamientos as t', 'ct.tratamiento_id', '=', 't.id')
			->get();
		$citas=[
			'citas' => $data
		];
        $pdf = PDF::loadView('/citas/myPDF', $citas);
        return $pdf->download('Citas.pdf');
    }
	
    public function index()
    {
		$citas = Citas::all();
		$clientes = Clientes::all();
		$empleados = Empleados::all();
		return view('citas.index', compact('clientes','empleados','citas'));
    }

    public function create()
    {
        return view("citas.create", ['error' => false ,'empleados' => Empleados::all(),'clientes' => Clientes::all(),'tratamientos' => Tratamientos::all()]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'fecha_cita' => 'required',
				'cliente_id' => 'required',
				'empleado_id' => 'required',
				'tratamiento_id' => 'required',
            ]);
		$validatedData = $request->except('tratamiento_id');
		$crearCita = $request->only('tratamiento_id');
		DB::beginTransaction();
		try {
			$data=Citas::create($validatedData);
			$crearCita['cita_id']=$data->id;
			CitasTratamientos::create($crearCita);
			DB::commit();
			return redirect('/citas');
   		} catch (\Exception $e){
			DB::rollback();
			return view('citas.create', ['error' => true,'empleados' => Empleados::all(),'clientes' => Clientes::all(),'tratamientos' => Tratamientos::all()]);
   		 }
    }

    public function show($id)
    {
		$citas= Citas::find($id);
		$clientes= Clientes::find($citas->cliente_id);
		$empleados=Empleados::find($citas->empleado_id);
        return view('citas.show', compact('citas','clientes','empleados'));
    }

    public function edit($id)
    {
		$data=CitasTratamientos::where('cita_id', $id)->get('tratamiento_id');
        return view('citas.update', ['citas' => Citas::find($id),'datos' => $data[0]->tratamiento_id,'empleados' => Empleados::all(),'clientes' => Clientes::all(),'tratamientos' => Tratamientos::all()]);
    }

    public function update(Request $request, $id)
    {
		
        $validatedData = $request->validate([
                'fecha_cita' => 'required',
			 	'cliente_id' => 'required',
				'empleado_id' => 'required',
				'tratamiento_id' => 'required',
            ]);
		$validatedData = $request->except('tratamiento_id');
		$actualizarCita = $request->only('tratamiento_id');
		Citas::find($id)->update($validatedData);
		CitasTratamientos::find($id)->update($actualizarCita);
		return redirect('/citas');
    }

    public function destroy($id)
    {
        Citas::find($id)->delete();
		return redirect('/citas');
    }

}
