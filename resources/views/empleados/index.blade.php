@extends('layouts.layout')
@section("content")
<div class="container">
	<h1>@lang('Employees')</h1>
	<a class="btn btn-success" href="/empleados/create">@lang('Add Employee')</a>
	<table id="table_id" class="table table-bordered table-striped" style="border: solid 1px #000;">
		<thead>
			<tr>
				<th style="width: 200px; border-bottom: solid 1px #000;">@lang('Name')</th>
				<th style="width: 200px; border-bottom: solid 1px #000;">@lang('Last Name')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Direction')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Identification (DNI)')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Telephone')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Show')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Edit')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Delete')</th>
			</tr>
		</thead>
		<tbody>
			@foreach($empleados as $empleado)
			<tr>
				<td style="text-align: center;">{{ $empleado->nombre }}</td>
				<td style="text-align: center;">{{ $empleado->apellidos }}</td>
				<td style="text-align: center;">{{ $empleado->direccion }}</td>
				<td style="text-align: center;">{{ $empleado->dni }}</td>
				<td style="text-align: center;">{{ $empleado->telefono }}</td>
				
				<td>
					<a href="/empleados/{{$empleado->id}}" class="btn btn-info">@lang('Show')</a>
				</td>
				<td>
					<a href="/empleados/{{$empleado->id}}/edit" class="btn btn-success">@lang('Edit')</a>
				</td>
				<td>
					<form method="POST" action="/empleados/{{$empleado->id}}">
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