@extends('layouts.layout') @section('content')
    <div class="col-md-8 offset-md-2 mt-5">
        <div class="card card-outline-secondary">
            @section("title")
                <h1>@lang('Edit Appointment')</h1>
            @endsection
            <div class="card-body">
                <form class="form" method="POST" action="{{ route('citas.update', $citas->id) }}" role="form">
                    @method('PUT') @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Appointment date')</label>
                        <div class="col-lg-9">
                            <input type="text" name="fecha_cita" id="fecha_cita" class="form-control" />
                            @if ($errors->has('fecha_cita'))
                                <span class="text-danger">{{ $errors->first('fecha_cita') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Clients')</label>
                        <div class="col-lg-9">
                            <select name="cliente_id" id="cliente_id" class="form-control select-sm"
                                value="{{ $citas->clientes->nombre_completo }}">
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombre_completo }}</option>
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
                            <select name="empleado_id" id="empleado_id" class="form-control select-sm"
                                value="{{ $citas->empleados->nombre_completo  }}">
                                @foreach ($empleados as $empleado)
                                    <option value="{{ $empleado->id }}">{{ $empleado->nombre_completo }}</option>
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
                            <select name="tratamiento_id" id="tratamiento_id" class="form-control select-sm"
                                value="{{ $datos }}">
                                @foreach ($tratamientos as $tratamiento)
                                    <option value="{{ $tratamiento->id }}">{{ $tratamiento->nombre_completo }}</option>
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
                            <a href="/citas/{{ $citas->id }}" class="btn "><i class="fas fa-chevron-circle-left fa-2x"></i></a>
                            <input type="submit" value="@lang('Save')" class="btn btn-success" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
