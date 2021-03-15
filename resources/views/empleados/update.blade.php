@extends('layouts.layout') @section("content")
<div class="col-md-8 offset-md-2 mt-5">
	<div class="card card-outline-secondary">
		<div class="card-header">
			<h3 class="mb-0">@lang('Edit Employee')</h3>
		</div>
		<div class="card-body">
			<form
				class="form"
				method="POST"
				action="{{ route('empleados.update',$empleados->id) }}"
				role="form"
				enctype="multipart/form-data"
			>
				@method('PUT') @csrf
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label"
						>@lang('Employee name')</label
					>
					<div class="col-lg-9">
						<input
							type="text"
							name="nombre"
							id="nombre"
							class="form-control input-sm"
							placeholder="@lang('Employee name')"
							value="{{$empleados->nombre}}"
						/>
						@if ($errors->has('nombre'))
						<span class="text-danger">{{ $errors->first('nombre') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label"
						>@lang('Employee surname')</label
					>
					<div class="col-lg-9">
						<input
							type="text"
							name="apellidos"
							id="apellidos"
							class="form-control input-sm"
							placeholder="@lang('Employee surname')"
							value="{{$empleados->apellidos}}"
						/>
						@if ($errors->has('apellidos'))
						<span class="text-danger">{{ $errors->first('apellidos') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label"
						>@lang('Home address')</label
					>
					<div class="col-lg-9">
						<input
							type="text"
							name="direccion"
							id="direccion"
							class="form-control input-sm"
							placeholder="@lang('Home address')"
							value="{{$empleados->direccion}}"
						/>
						@if ($errors->has('direccion'))
						<span class="text-danger">{{ $errors->first('direccion') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label"
						>@lang('Identification (DNI)')</label
					>
					<div class="col-lg-9">
						<input
							type="text"
							name="dni"
							id="dni"
							class="form-control input-sm"
							placeholder="@lang('Identification (DNI)')"
							value="{{$empleados->dni}}"
						/>
						@if ($errors->has('dni'))
						<span class="text-danger">{{ $errors->first('dni') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label"
						>@lang('Employee phone')</label
					>
					<div class="col-lg-9">
						<input
							type="text"
							name="telefono"
							id="telefono"
							class="form-control input-sm"
							placeholder="@lang('Employee phone')"
							value="{{$empleados->telefono}}"
						/>
						@if ($errors->has('telefono'))
						<span class="text-danger">{{ $errors->first('telefono') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label"
						>@lang('Employee photo')</label
					>
					<div class="col-lg-9">
						<input
							type="file"
							name="foto"
							id="foto"
							class="form-control-file"
							value="{{$empleados->foto}}"
						/>
						@if ($errors->has('foto'))
						<span class="text-danger">{{ $errors->first('foto') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label"></label>
					<div class="col-lg-9">
						<a href="{{ route('empleados.index') }}" class="btn btn-info"
							>@lang('Return')</a>
						<input
							type="submit"
							value="@lang('Save')"
							class="btn btn-success"
						/>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection