@extends('layouts.layout') @section('content')
    <div class="col-md-8 offset-md-2 mt-5">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">@lang('Edit Product')</h3>
            </div>
            <div class="card-body">
                <form class="form" method="POST" action="{{ route('productos.update', $productos->id) }}" role="form"
                    enctype="multipart/form-data">
                    @method('PUT') @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Product denomination')</label>
                        <div class="col-lg-9">
                            <input type="text" name="denominacion_producto" id="denominacion_producto"
                                class="form-control input-sm" placeholder="@lang('Product denomination')"
                                value="{{ $productos->denominacion_producto }}" />
                            @if ($errors->has('denominacion_producto'))
                                <span class="text-danger">{{ $errors->first('denominacion_producto') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Brand of the product')</label>
                        <div class="col-lg-9">
                            <input type="text" name="marca" id="marca" class="form-control input-sm"
                                placeholder="@lang('Brand of the product')" value="{{ $productos->marca }}" />
                            @if ($errors->has('marca'))
                                <span class="text-danger">{{ $errors->first('marca') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Price of the product')</label>
                        <div class="col-lg-9">
                            <input type="text" name="precio" id="precio" class="form-control input-sm"
                                placeholder="@lang('Price of the product')" value="{{ $productos->precio }}" />
                            @if ($errors->has('precio'))
                                <span class="text-danger">{{ $errors->first('precio') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Date of Expiry')</label>
                        <div class="col-lg-9">
                            <input type="date" name="fecha_cadu" id="fecha_cadu" class="form-control input-sm"
                                placeholder="@lang('Date of Expiry')" value="{{ $productos->fecha_cadu }}" />
                            @if ($errors->has('fecha_cadu'))
                                <span class="text-danger">{{ $errors->first('fecha_cadu') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">@lang('Quantity')</label>
                        <div class="col-lg-9">
                            <input type="text" name="cantidad" id="cantidad" class="form-control input-sm"
                                placeholder="@lang('Quantity')" value="{{ $productos->cantidad }}" />
                            @if ($errors->has('cantidad'))
                                <span class="text-danger">{{ $errors->first('cantidad') }}</span>
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
    @endsection
</div>
