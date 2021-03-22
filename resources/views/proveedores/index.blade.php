@extends('layouts.layout')
@section('content')
    <div class="container">
	@section("title")
	<h1>@lang('Providers')</h1>
	@endsection
        <a class="btn" href="/proveedores/create"><i class="fas fa-plus-circle fa-3x"></i></a>
        <table id="table_id" class="table table-bordered table-striped" style="border: solid 1px #000;">
            <thead>
                <tr>
                    <th style="width: 200px; border-bottom: solid 1px #000;">@lang('Social denomination')</th>
                    <th style="width: 200px; border-bottom: solid 1px #000;">@lang('Direction')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Telephone')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Show')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Edit')</th>
                    <th style="width: 50px; border-bottom: solid 1px #000;">@lang('Delete')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proveedores as $proveedor)
                    <tr>
                        <td style="text-align: center;">{{ $proveedor->denominacion_social }}</td>
                        <td style="text-align: center;">{{ $proveedor->direccion }}</td>
                        <td style="text-align: center;">{{ $proveedor->telefono }}</td>
                        <td>
                            <a href="/proveedores/{{ $proveedor->id }}"><i class="far fa-eye fa-2x"></i></a>
                        </td>
                        <td>
                            <a href="/proveedores/{{ $proveedor->id }}/edit"> <i class="far fa-edit fa-2x"></i></a>
                        </td>
                        <td>
                            <form method="POST" action="/proveedores/{{ $proveedor->id }}">
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
@endsection
