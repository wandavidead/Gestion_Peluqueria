@extends('layouts.layout')
@section('content')
    <div class="col-md-8 offset-md-2 mt-5">
        <div class="card card-outline-secondary">
            <div class="card-body d-flex">
                <h3 class="mb-0">@lang('Treatment')</h3>
                <a href="/tratamientos" class="btn ml-auto"><i class="fas fa-chevron-circle-left fa-2x"></i></a>
            </div>
        </div>
        <div class="row gutters-sm">
            <div class="col-md-8">
                <div class="card mb-3" style="width: 1036.66px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">@lang('Denomination')</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $tratamientos->denominacion }}
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">@lang('Price')</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $tratamientos->precio }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
