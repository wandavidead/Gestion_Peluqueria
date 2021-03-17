@extends('layouts.layout')
@section("content")
<div class="container">
	<h1>@lang('Appointments')</h1>
	<a class="btn btn-success" href="/citas/create">@lang('Add Appointment')</a>
	<a class="btn btn-danger" href="/myPDF">@lang('Imprimir PDF')</a>
	<div id="evoCalendar"></div>
	<table id="table_id" class="table table-bordered table-striped" style="border: solid 1px #000;">
		<thead>
			<tr>
				<th style="width: 200px; border-bottom: solid 1px #000;">@lang('Appointment date')</th>
				<th style="width: 200px; border-bottom: solid 1px #000;">@lang('Client')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Employee')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Show')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Edit')</th>
				<th style="width: 50px; border-bottom: solid 1px #000;">@lang('Delete')</th>
			</tr>
		</thead>
		<tbody>
			@foreach($citas as $cita)
			<tr>
				<td style="text-align: center;">{{ $cita->fecha_cita }}</td>
				@foreach($clientes as $cliente)
					@if ($cita->cliente_id == $cliente->id)
						<td style="text-align: center;">{{ $cliente->nombre_completo}}</td>
					@endif
				@endforeach
				@foreach($empleados as $empleado)
					@if ($cita->empleado_id == $empleado->id)
						<td style="text-align: center;">{{ $empleado->nombre_completo }}</td>
					@endif
				@endforeach
				<td>
					<a href="/citas/{{$cita->id}}" class="btn btn-info">@lang('Show')</a>
				</td>
				<td>
					<a href="/citas/{{$cita->id}}/edit" class="btn btn-success"
						>@lang('Edit')</a
					>
				</td>
				<td>
					<form method="POST" action="/citas/{{$cita->id}}">
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