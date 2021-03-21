@extends('layouts.layout') @section('content')
    <div class="col-md-8 offset-md-2 mt-5">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">@lang('New Treatment')</h3>
            </div>
            <div class="card-body">
                @if ($error)
                    <span class="text-danger">Hubo un problema de base de datos.</span>
                @endif
                <form class="form" method="POST" action="{{ route('tratamientos.store') }}" role="form">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Denomination')</label>
                        <div class="col-lg-9">
                            <input type="text" name="denominacion" id="denominacion" class="form-control input-sm"
                                placeholder="@lang('Denomination')" />
                            @if ($errors->has('denominacion'))
                                <span class="text-danger">{{ $errors->first('denominacion') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Price')</label>
                        <div class="col-lg-9">
                            <input type="text" name="precio" id="precio" class="form-control input-sm"
                                placeholder="@lang('Price')" />
                            @if ($errors->has('precio'))
                                <span class="text-danger">{{ $errors->first('precio') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Products')</label>
                        <div class="col-lg-9">
                            <select name="producto_id" id="producto_id" class="form-control select-sm">
                                <option>@lang('Select the product')</option>
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->id }} -
                                        {{ $producto->nombre_completo }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('producto_id'))
                                <span class="text-danger">{{ $errors->first('producto_id') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <a href="{{ route('tratamientos.index') }}" class="btn "><i class="fas fa-chevron-circle-left fa-3x"></i></a>
                            <input type="submit" value="@lang('Save')" class="btn btn-success" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
