@extends('layouts.layoutmenu')

@section('content')
    <section class="wrapper fixed-top">
        <div class="container h-100">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div id="first">
                        <div class="myform form mt-5 ">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>Login</h1>
                                </div>
                            </div>
                            <x-guest-layout>
                                <x-jet-validation-errors class="mb-4" />
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('login') }}" name="login">
                                    @csrf
                                    <div>
                                        <label for="email" value="{{ __('Email') }}"></label>
                                        <input id="email" class="block mt-1 w-full" type="email" name="email"
                                            :value="old('email')" required autofocus />
                                    </div>
                                    <div class="mt-4">
                                        <label for="password" value="{{ __('Password') }}"></label>
                                        <input id="password" class="block mt-1 w-full" type="password" name="password"
                                            required autocomplete="current-password" />
                                    </div>
                                    <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <x-jet-checkbox id="remember_me" name="remember" />
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-md-12 text-center ">
                                        <button
                                            class=" btn btn-block mybtn btn-primary tx-tfm">{{ __('Log in') }}</button>
                                    </div>
                                </form>
                            </x-guest-layout>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
