    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    {{-- <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body"> --}}
                    <form method="POST" action="{{ route('register') }}" id="registration_form" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-4">
                            <h3 class="text-left"><u>{{ __('form.titleRegister') }}</u></h3>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="col-6 pe-2">
                                <div class="form-group row mb-2">
                                    <label for="first_name" class="col-sm-3 col-form-label">{{ __('form.first_name') }}
                                        :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control
                                            @error('first_name') is-invalid @enderror" id="first_name" name="first_name">
                                    </div>
                                    @error('first_name')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="email" class="col-sm-3 col-form-label">{{ __('form.email') }} :</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email">
                                    </div>
                                    <span class="text-danger" role="alert">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="gender" class="col-sm-3 col-form-label">{{ __('form.gender') }} :</label>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <div class="input-group-prepend @error('gender') is-invalid @enderror">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="male"
                                                    value="Male">
                                                <label class="form-check-label" for="male">{{ __('form.male') }}</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="female"
                                                    value="Female">
                                                <label class="form-check-label" for="female">{{ __('form.female') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-danger" role="alert">
                                        @error('gender')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row mb-2">
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
                            </div>
                            <div class="col-6 ps-2">
                                <div class="form-group row mb-2">
                                    <label for="last_name" class="col-sm-3 col-form-label">{{ __('form.last_name') }}
                                        :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                            id="last_name" name="last_name">
                                    </div>
                                    <span class="text-danger" role="alert">
                                        @error('last_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="role" class="col-sm-3 col-form-label">{{ __('form.role') }} :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group @error('role') is-invalid @enderror">
                                            <select class="form-control" id="role" form="registration_form"
                                                name="role">
                                                <option value="Admin">{{ __('form.admin')}}</option>
                                                <option value="User">{{ __('form.user')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <span class="text-danger" role="alert">
                                        @error('role')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="display_picture"
                                        class="col-sm-3 col-form-label">{{ __('form.display_picture') }} :</label>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <input type="file" class="form-control @error('display_picture') is-invalid @enderror"
                                        id="display_picture" placeholder="No file chosen" name="display_picture">
                                    </div>
                                    <span class="text-danger" role="alert">
                                        @error('display_picture')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="password-confirm"
                                        class="col-sm-3 col-form-label">{{ __('form.confirm_password') }} :</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control
                                            @error('password') is-invalid @enderror" id="password-confirm"
                                            name="password_confirmation">
                                    </div>
                                </div>
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
                                <a href="{{ route('login') }}">{{ __('form.already_account') }}</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endsection
