@extends('layouts.layout') @section("content")
<div class="col-md-8 offset-md-2 mt-5">
	<div class="card card-outline-secondary">
		<div class="card-body d-flex">
			<h3 class="mb-0">@lang('Product')</h3>
			<a href="/productos" class="btn btn-info ml-auto">@lang('Return')</a>
		</div>
	</div>
	<div class="row gutters-sm">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body" style="height:377px">
					<div class="d-flex flex-column align-items-center text-center">
						<img
							src="data:image/png;base64, {{ $productos->foto }}"
							width="200px"
							height="200px"
						/>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card mb-3">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Product denomination')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$productos->denominacion_producto}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Brand')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$productos->marca}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Price')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$productos->precio}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Date of Expiry')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$productos->fecha_cadu}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Quantity')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$productos->cantidad}}
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-3">
							<h6 class="mb-0">@lang('Descripcion')</h6>
						</div>
						<div class="col-sm-9 text-secondary">
							{{$productos->descripcion}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
@endsection