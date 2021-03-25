@extends('layouts.layout') @section('content')
    <div class="col-md-8 offset-md-2 mt-5">
        <div class="card card-outline-secondary">
            @section("title")
                <h1>@lang('Edit Client')</h1>
            @endsection
            <div class="card-body">
                <form class="form" method="POST" action="{{ route('clientes.update', $clientes->id) }}" role="form">
                    @method('PUT') @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Client name')</label>
                        <div class="col-lg-9">
                            <input type="text" name="nombre" id="nombre" class="form-control input-sm"
                                placeholder="@lang('Client name')" value="{{ $clientes->nombre }}" />
                            @if ($errors->has('nombre'))
                                <span class="text-danger">{{ $errors->first('nombre') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Client surname')</label>
                        <div class="col-lg-9">
                            <input type="text" name="apellidos" id="apellidos" class="form-control input-sm"
                                placeholder="@lang('Client surname')" value="{{ $clientes->apellidos }}" />
                            @if ($errors->has('apellidos'))
                                <span class="text-danger">{{ $errors->first('apellidos') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Client phone')</label>
                        <div class="col-lg-9">
                            <input type="text" name="telefono" id="telefono" class="form-control input-sm"
                                placeholder="@lang('Client phone')" value="{{ $clientes->telefono }}" />
                            @if ($errors->has('telefono'))
                                <span class="text-danger">{{ $errors->first('telefono') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <a href="{{ route('clientes.index') }}" class="btn "><i class="fas fa-chevron-circle-left fa-2x"></i></a>
                            <input type="submit" value="@lang('Save')" class="btn btn-success" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
