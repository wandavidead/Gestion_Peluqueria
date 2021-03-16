@extends('layouts.layout') @section("content")
<div class="col-md-8 offset-md-2 mt-5">
	<div class="card card-outline-secondary">
		<div class="card-body d-flex">
			<h3 class="mb-0">@lang('Employee')</h3>
			<a href="/empleados" class="btn btn-info ml-auto">@lang('Return')</a>
		</div>
	</div>
	<div class="row gutters-sm">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body" style="height:377px">
					<div class="d-flex flex-column align-items-center text-center">
						<img
							src="data:image/png;base64, {{ pg_unescape_bytea(stream_get_contents($empleados->foto)) }}"
							class="rounded-circle"
							width="128px"
							height="128px"
						/>
						<div>
							<h4>{{$empleados->nombre_completo}}</h4>
							<p class="text-muted">{{$empleados->direccion}}</p>
							<p class="text-muted">{{$empleados->email}}</p>
							<button class="btn btn-outline-primary">Message</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card mb-3">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Name')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$empleados->nombre}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Last Name')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$empleados->apellidos}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Email')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$empleados->email}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Telephone')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$empleados->telefono}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Identification (DNI)')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$empleados->dni}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Home address')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$empleados->direccion}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection