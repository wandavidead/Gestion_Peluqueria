@extends('layouts.layout') @section("content")
<div class="col-md-8 offset-md-2 mt-5">
	<div class="card card-outline-secondary">
		@section("title")
			<h1>@lang('New Appointment')</h1>
		@endsection
		<div class="card-body">
			@if ($error)
			<span class="text-danger">Hubo un problema de base de datos.</span>
			@endif
			<form class="form" method="POST" action="{{ route('citas.store') }}" role="form">
				{{ csrf_field() }}
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label"
						>@lang('Appointment date')</label
					>
					<div class="col-lg-9">
						<input
							type="text"
							name="fecha_cita"
							autocomplete="off"
							id="fecha_cita"
							class="form-control"
						/>
						@if ($errors->has('fecha_cita'))
						<span class="text-danger">{{ $errors->first('fecha_cita') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label">@lang('Clients')</label>
					<div class="col-lg-9">
						<select name="cliente_id" id="cliente_id" class="form-control select-sm">
							<option>@lang('Select the client')</option>
							@foreach($clientes as $cliente)
							<option value="{{ $cliente->id }}"
								>{{ $cliente->id }} - {{ $cliente->nombre_completo }}</option
							>
							@endforeach
						</select>
						@if ($errors->has('cliente_id'))
						<span class="text-danger">{{ $errors->first('cliente_id') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label">@lang('Employees')</label>
					<div class="col-lg-9">
						<select name="empleado_id" id="empleado_id" class="form-control select-sm">
							<option>@lang('Select the employee')</option>
							@foreach($empleados as $empleado)
							<option value="{{ $empleado->id }}"
								>{{ $empleado->id }} - {{ $empleado->nombre_completo }}</option
							>
							@endforeach
						</select>
						@if ($errors->has('empleado_id'))
						<span class="text-danger">{{ $errors->first('empleado_id') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label">@lang('Treatments')</label>
					<div class="col-lg-9">
						<select
							name="tratamiento_id"
							id="tratamiento_id"
							class="form-control select-sm"
						>
							<option>@lang('Select the treament')</option>
							@foreach($tratamientos as $tratamiento)
							<option value="{{ $tratamiento->id }}"
								>{{ $tratamiento->id }} - {{ $tratamiento->nombre_completo }}</option
							>
							@endforeach
						</select>
						@if ($errors->has('tratamiento_id'))
						<span class="text-danger">{{ $errors->first('tratamiento_id') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label"></label>
					<div class="col-lg-9">
						<a href="/citas" class="btn ml-auto"><i class="fas fa-chevron-circle-left fa-2x"></i></a>
						<input type="submit" value="@lang('Save')" class="btn btn-success" />
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection