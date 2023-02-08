@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <form method="POST" action="{{ route('login') }}">
                    @csrf


                    <div class="form-group mb-4">
                        <h3 class="text-left"><u>{{ __('form.titleLogin') }}</u></h3>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="email" class="col-sm-3 col-form-label">{{ __('form.email') }} :</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" required autocomplete="email" autofocus id="email"
                                name="email">
                        </div>
                        <span class="text-danger" role="alert">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="password" class="col-sm-3 col-form-label">{{ __('form.password') }}
                            :</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password">
                        </div>
                        <span class="text-danger" role="alert">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group row mb-3">

                        <div class="form-check ms-2">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                    </div>


                    <div class="d-flex justify-content-center row">
                        <div class="w-auto mb-2 mt-4">
                            <div class="col text-center" style="background-color: #f5da55 !important">
                                <button type="submit" class="btn">
                                    {{ __('form.submit') }}
                                </button>
                            </div>
                        </div>

                        <div class="row  justify-content-center text-center">
                            <a href="{{ route('register') }}">{{ __('form.no_account') }}</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
