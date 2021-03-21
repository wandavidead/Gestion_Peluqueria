@extends('layouts.layout') @section('content')
    <div class="col-md-8 offset-md-2 mt-5">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">@lang('Edit Provider')</h3>
            </div>
            <div class="card-body">
                <form class="form" method="POST" action="{{ route('proveedores.update', $proveedores->id) }}" role="form">
                    @method('PUT') @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Social denomination')</label>
                        <div class="col-lg-9">
                            <input type="text" name="nombre" id="nombre" class="form-control input-sm"
                                placeholder="@lang('Social denomination')"
                                value="{{ $proveedores->denominacion_social }}" />
                            @if ($errors->has('denominacion_social'))
                                <span class="text-danger">{{ $errors->first('denominacion_social') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Home address')</label>
                        <div class="col-lg-9">
                            <input type="text" name="direccion" id="direccion" class="form-control input-sm"
                                placeholder="@lang('Home address')" value="{{ $proveedores->direccion }}" />
                            @if ($errors->has('direccion'))
                                <span class="text-danger">{{ $errors->first('direccion') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Telephone')</label>
                        <div class="col-lg-9">
                            <input type="text" name="telefono" id="telefono" class="form-control input-sm"
                                placeholder="@lang('Telephone')" value="{{ $proveedores->telefono }}" />
                            @if ($errors->has('telefono'))
                                <span class="text-danger">{{ $errors->first('telefono') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <a href="{{ route('proveedores.index') }}" class="btn btn-info btn-block">@lang('Return')</a>
                            <input type="submit" value="@lang('Save')" class="btn btn-success btn-block" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
</div>
