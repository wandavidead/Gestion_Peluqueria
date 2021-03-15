@extends('layouts.layout')
@section("content")
<div class="container">
	<h1>@lang('Products')</h1>
	<a class="btn btn-success" href="/productos/create">@lang('Add Product')</a>
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
			@foreach($productos as $producto)
			<tr>
				<td style="text-align: center;">{{ $producto->denominacion_producto }}</td>
				<td style="text-align: center;">{{ $producto->marca }}</td>
				<td style="text-align: center;">{{ $producto->precio }}</td>
				<td style="text-align: center;">{{ $producto->fecha_cadu }}</td>
				<td style="text-align: center;">{{ $producto->cantidad }}</td>
				<td>
					<a href="/productos/{{$producto->id}}" class="btn btn-info">@lang('Show')</a>
				</td>
				<td>
					<a href="/productos/{{$producto->id}}/edit" class="btn btn-success">@lang('Edit')</a>
				</td>
				<td>
					<form method="POST" action="/productos/{{$producto->id}}">
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