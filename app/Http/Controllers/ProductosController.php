<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\ProductosProveedores;
use App\Models\Proveedores;
use App\Models\Categorias;
use Illuminate\Http\Request;
use App\Http\Requests\ProductosRequest;
use App\Http\Middleware\Cantidad;
use App\Http\Resources\listproduct;
use Illuminate\Support\Facades\DB;


class ProductosController extends Controller
{

    public function index()
    {
		
        return view('productos.index', ['productos' => Productos::all()]);
    }
	
	public function banner(Request $request)
    {
		return new listproduct(Productos::all());
    }
	
	public function listProduct(Request $request)
    {
		$datos = $request->all();
		if ($datos['categoria_id']){
			$product = new listproduct(Productos::where('categoria_id', '=' , $datos['categoria_id'])->paginate(9));
		}else {
			$product = new listproduct(Productos::paginate(9));
		}
			
		$response = [
            'pagination' => [
                'total' => $product->total(),
                'per_page' => $product->perPage(),
                'current_page' => $product->currentPage(),
                'last_page' => $product->lastPage(),
                'from' => $product->firstItem(),
                'to' => $product->lastItem()
            ],
            'data' => $product
        ];
        return response()->json($response);
    }	
	
    public function create()
    {
        return view("productos.create", ['error' => false,'proveedores' => Proveedores::all(),'categorias' => Categorias::all()]);
    }

    public function store(ProductosRequest $request)
    {
        $validatedData = $request->all();
		$validatedData = $request->except('proveedor_id');
		$crearRelacion = $request->only('proveedor_id');
		DB::beginTransaction();
		try {
			$data=Productos::create($validatedData);
			$crearRelacion['producto_id']=$data->id;
			ProductosProveedores::create($crearRelacion);
			DB::commit();
			return redirect('/productos');
   		} catch (\Exception $e){
            dd($e);
			DB::rollback();
			return view('productos.create', ['error' => true,'proveedores' => Proveedores::all(),'categorias' => Categorias::all()]);
        }
    }

    public function show($id)
    {
        return view('productos.show', ['productos' => Productos::find($id)]);
    }

     public function edit($id)
    {
        return view('productos.update', ['productos' => Productos::find($id)]);
    }

    public function update(ProductosRequest $request, $id)
    {
        $datos=$request->all();
		Productos::find($id)->update($datos);
		return redirect('/productos');
    }

    public function destroy($id)
    {
        Productos::find($id)->delete();
		return redirect('/productos');
    }
	
}
