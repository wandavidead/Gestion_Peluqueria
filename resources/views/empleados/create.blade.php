@extends('layouts.layout') @section("content")
<div class="col-md-8 offset-md-2 mt-5">
	<div class="card card-outline-secondary">
		<div class="card-header">
			<h3 class="mb-0">@lang('New Employee')</h3>
		</div>
		<div class="card-body">
			<form class="form" method="POST" action="{{ route('empleados.store') }}" role="form" enctype="multipart/form-data">
				{{ csrf_field() }}
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
						/>
						@if ($errors->has('telefono'))
						<span class="text-danger">{{ $errors->first('telefono') }}</span>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label form-control-label"
						>@lang('Employee email')</label
					>
					<div class="col-lg-9">
						<input
							type="text"
							name="email"
							id="email"
							class="form-control input-sm"
							placeholder="@lang('Employee email')"
						/>
						@if ($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
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
							>@lang('Return')</a
						>
						<input type="submit" value="@lang('Save')" class="btn btn-success" />
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection