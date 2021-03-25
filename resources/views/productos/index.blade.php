@extends('layouts.layout')
@section('content')
    <div class="container">
	@section("title")
	<h1>@lang('Products')</h1>
	@endsection
        <a class="btn" href="/productos/create"><i class="fas fa-plus-circle fa-3x"></i></a>
        <table id="table_id" class="table table-bordered table-striped" style="border: solid 1px #000;">
            <thead>
                <tr>
                    <th style="width: 200px; border-bottom: solid 1px #000;">@lang('Product denomination')</th>
                    <th style="width: 200px; border-bottom: solid 1px #000;">@lang('Brand')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Price')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Date of Expiry')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Quantity')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Show')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Edit')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Delete')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td style="text-align: center;">{{ $producto->denominacion_producto }}</td>
                        <td style="text-align: center;">{{ $producto->marca }}</td>
                        <td style="text-align: center;">{{ $producto->precio }}</td>
                        <td style="text-align: center;">{{ $producto->fecha_cadu }}</td>
                        <td style="text-align: center;">{{ $producto->cantidad }}</td>
                        <td>
                            <a href="/productos/{{ $producto->id }}"><i class="far fa-eye fa-2x"></i></a>
                        </td>
                        <td>
                            <a href="/productos/{{ $producto->id }}/edit" <i class="far fa-edit fa-2x"></i></a>
                        </td>
                        <td>
                            <form class="formeliminar" method="POST" action="/productos/{{ $producto->id }}">
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt fa-2x"></i></button>
                                <input type="hidden" name="_method" value="DELETE" />
                                @csrf @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@if(Session::has('añadir_producto'))
	<script>
		toastr.success("{!!Session::get('añadir_producto')!!}")
	</script>
@endif
@if(Session::has('editar_producto'))
    <script>
        toastr.success("{!!Session::get('editar_producto')!!}")
    </script>
@endif
@endsection
