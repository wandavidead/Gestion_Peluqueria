@extends('layouts.layout') @section('content')
    <div class="col-md-8 offset-md-2 mt-5">
        <div class="card card-outline-secondary">
            <div class="card-body d-flex">
                <h3 class="mb-0">@lang('Appointment')</h3>
                <a href="/citas" class="btn btn-info ml-auto">@lang('Return')</a>
                <a href="/citas/{{ $citas->id }}/edit" class="btn btn-success">@lang('Edit')</a>
				<form method="POST" action="/citas/{{$citas->id}}">
					<input class="btn btn-danger" type="submit" value="@lang('Delete')" />
					<input type="hidden" name="_method" value="DELETE" />
					@csrf @method('delete')
				</form>
            </div>
        </div>
        <div class="row gutters-sm">
            <div class="col-md-8">
                <div class="card mb-3" style="width: 1036.66px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">@lang('Appointment date')</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $citas->fecha_cita }}
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">@lang('Client')</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $citas->clientes->nombre_completo }}
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">@lang('Employee')</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $citas->empleados->nombre_completo }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
