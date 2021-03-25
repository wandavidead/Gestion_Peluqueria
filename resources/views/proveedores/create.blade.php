@extends('layouts.layout') @section('content')
    <div class="col-md-8 offset-md-2 mt-5">
        <div class="card card-outline-secondary">
            @section("title")
                <h1>@lang('New Provider')</h1>
            @endsection
            <div class="card-body">
                <form class="form" method="POST" action="{{ route('proveedores.store') }}" role="form">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Social denomination')</label>
                        <div class="col-lg-9">
                            <input type="text" name="denominacion_social" id="denominacion_social"
                                class="form-control input-sm" placeholder="@lang('Social denomination')" />
                            @if ($errors->has('denominacion_social'))
                                <span class="text-danger">{{ $errors->first('denominacion_social') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Home address')</label>
                        <div class="col-lg-9">
                            <input type="text" name="direccion" id="direccion" class="form-control input-sm"
                                placeholder="@lang('Home address')" />
                            @if ($errors->has('direccion'))
                                <span class="text-danger">{{ $errors->first('direccion') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Telephone')</label>
                        <div class="col-lg-9">
                            <input type="text" name="telefono" id="telefono" class="form-control input-sm"
                                placeholder="@lang('Telephone')" />
                            @if ($errors->has('telefono'))
                                <span class="text-danger">{{ $errors->first('telefono') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <a href="{{ route('proveedores.index') }}" class="btn "><i class="fas fa-chevron-circle-left fa-2x"></i></a>
                            <input type="submit" value="@lang('Save')" class="btn btn-success" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
