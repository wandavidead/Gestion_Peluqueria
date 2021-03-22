@extends('layouts.layout') @section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex flex-wrap justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="https://image.flaticon.com/icons/png/512/1314/1314676.png"
                            alt="Card image cap" />
                        <a href="{{ route('citas.index') }}" class="btn btn-info mt-2">@lang('Go Appointments')</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="https://image.flaticon.com/icons/png/512/1713/1713272.png"
                            alt="Card image cap" />
                        <a href="{{ route('empleados.index') }}" class="btn btn-info mt-2">@lang('Go Employees')</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top"
                            src="https://i.pinimg.com/originals/60/eb/68/60eb68bb3242ef4ac327a3fe28d25719.png"
                            alt="Card image cap" />
                        <a href="{{ route('clientes.index') }}" class="btn btn-info mt-2">@lang('Go Clients')</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="https://image.flaticon.com/icons/png/512/1312/1312091.png"
                            alt="Card image cap" />
                        <a href="{{ route('productos.index') }}" class="btn btn-info mt-2">@lang('Go Products')</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="https://image.flaticon.com/icons/png/512/2104/2104129.png"
                            alt="Card image cap" />
                        <a href="{{ route('proveedores.index') }}" class="btn btn-info mt-2">@lang('Go Providers')</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img class="card-img-top" src="https://image.flaticon.com/icons/png/512/563/563890.png"
                            alt="Card image cap" />
                        <a href="{{ route('tratamientos.index') }}" class="btn btn-info mt-2">@lang('Go
                            Treatments')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
