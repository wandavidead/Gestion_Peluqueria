@extends('layouts.layout')
@section("content")
<div class="container">
	<h1>@lang('Providers')</h1>
	<a class="btn btn-success" href="/proveedores/create">@lang('Add Provider')</a>
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
			@foreach($proveedores as $proveedor)
			<tr>
				<td style="text-align: center;">{{ $proveedor->denominacion_social }}</td>
				<td style="text-align: center;">{{ $proveedor->direccion }}</td>
				<td style="text-align: center;">{{ $proveedor->telefono }}</td>
				
				<td>
					<a href="/proveedores/{{$proveedor->id}}" class="btn btn-info">@lang('Show')</a>
				</td>
				<td>
					<a href="/proveedores/{{$proveedor->id}}/edit" class="btn btn-success"
						>@lang('Edit')</a
					>
				</td>
				<td>
					<form method="POST" action="/proveedores/{{$proveedor->id}}">
						<input class="btn btn-danger" type="submit" value="@lang('Delete')" />
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