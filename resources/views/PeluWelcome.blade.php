@extends('layouts.layoutmenu')

@section("content")
<section class="wrapper fixed-top">
        <div class="overlays"></div>
        <div class="container h-100">
            <div class="row h-100 justify-content-between align-items-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-5" style="background-color:black">@lang('Welcome to the page to run a hairdresser.')</h1>
                        <a class="btn btn-success btn-outline  mt-5" href="{{ route('login') }}">@lang('Login')</a>
                        <a class="btn btn-outline-primary  mt-5" href="{{ route('register') }}">@lang('Register')</a>                     
                    </div>    
                </div>
            </div>
        </div>
    </section> 
@endsection