@extends('layouts.layout') @section('content')
    <div class="col-md-8 offset-md-2 mt-5">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">@lang('New Product')</h3>
            </div>
            <div class="card-body">
                @if ($error)

                @endif
                <form class="form" method="POST" action="{{ route('productos.store') }}" role="form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Product denomination')</label>
                        <div class="col-lg-9">
                            <input type="text" name="denominacion_producto" id="denominacion_producto"
                                class="form-control input-sm" placeholder="@lang('Product denomination')" />
                            @if ($errors->has('denominacion_producto'))
                                <span class="text-danger">{{ $errors->first('denominacion_producto') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Brand of the product')</label>
                        <div class="col-lg-9">
                            <input type="text" name="marca" id="marca" class="form-control input-sm"
                                placeholder="@lang('Brand of the product')" />
                            @if ($errors->has('marca'))
                                <span class="text-danger">{{ $errors->first('marca') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Price of the product')</label>
                        <div class="col-lg-9">
                            <input type="text" name="precio" id="precio" class="form-control input-sm"
                                placeholder="@lang('Price of the product')" />
                            @if ($errors->has('precio'))
                                <span class="text-danger">{{ $errors->first('precio') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Date of Expiry')</label>
                        <div class="col-lg-9">
                            <input type="date" name="fecha_cadu" id="fecha_cadu" class="form-control input-sm"
                                placeholder="@lang('Date of Expiry')" />
                            @if ($errors->has('fecha_cadu'))
                                <span class="text-danger">{{ $errors->first('fecha_cadu') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Quantity')</label>
                        <div class="col-lg-9">
                            <input type="text" name="cantidad" id="cantidad" class="form-control input-sm"
                                placeholder="@lang('Quantity')" />
                            @if ($errors->has('cantidad'))
                                <span class="text-danger">{{ $errors->first('cantidad') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Categorias')</label>
                        <div class="col-lg-9">
                            <select name="categoria_id" id="categoria_id" class="form-control select-sm"
                                data-live-search="true">
                                <option>@lang('Select the Categoria')</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->id }} -
                                        {{ $categoria->nombre_categoria }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('categoria_id'))
                                <span class="text-danger">{{ $errors->first('categoria_id') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Select the provider')</label>
                        <div class="col-lg-9">
                            <select id="proveedor_id" class="form-control select-sm selectpicker" multiple
                                data-live-search="true" name="prod[]">
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{ $proveedor->id }}">{{ $proveedor->id }} -
                                        {{ $proveedor->denominacion_social }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('proveedor_id'))
                                <span class="text-danger">{{ $errors->first('proveedor_id') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Descripcion')</label>
                        <div class="col-lg-9">
                            <textarea type="textarea" name="descripcion" id="descripcion" class="form-control input-sm"
                                placeholder="@lang('Descripcion')"></textarea>
                            @if ($errors->has('descripcion'))
                                <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Products photo')</label>
                        <div class="col-lg-9">
                            <input type="file" name="foto" id="foto" class="form-control-file" />
                            @if ($errors->has('foto'))
                                <span class="text-danger">{{ $errors->first('foto') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <a href="{{ route('productos.index') }}" class="btn "><i class="fas fa-chevron-circle-left fa-2x"></i></a>
                            <input type="submit" value="@lang('Save')" class="btn btn-success" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
