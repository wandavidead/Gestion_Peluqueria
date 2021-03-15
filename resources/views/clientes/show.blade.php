@extends('layouts.layout') @section("content")
<div class="col-md-8 offset-md-2 mt-5">
	<div class="card card-outline-secondary">
		<div class="card-body d-flex">
			<h3 class="mb-0">@lang('Client')</h3>
			<a href="/clientes" class="btn btn-info ml-auto">@lang('Return')</a>
		</div>
	</div>
	<div class="row gutters-sm">
		<div class="col-md-8">
			<div class="card mb-3" style="width: 1036.66px;">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Name')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$clientes->nombre}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Last Name')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$clientes->apellidos}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Telephone')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$clientes->telefono}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection