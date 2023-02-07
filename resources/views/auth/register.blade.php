    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    {{-- <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body"> --}}
                    <form method="POST" action="{{ route('register') }}" id="registration_form"">
                        @csrf

                        <div class="form-group mb-4">
                            <h3 class="text-left"><u>{{ __('form.titleRegister') }}</u></h3>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="col-6 pe-2">
                                <div class="form-group row mb-2">
                                    <label for="firstName" class="col-sm-3 col-form-label">{{ __('form.first_name') }} :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" @error('first_name') is-invalid @enderror"
                                            id="firstName" name="firstName">
                                    </div>
                                    <span class="invalid-feedback" role="alert">
                                        @error('first_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="email" class="col-sm-3 col-form-label">{{ __('form.email') }} :</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" @error('email') is-invalid @enderror"
                                            id="email" name="email">
                                    </div>
                                    <span class="invalid-feedback" role="alert">
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
                                                    value="male">
                                                <label class="form-check-label" for="male">@lang('form.male')</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="female"
                                                    value="female">
                                                <label class="form-check-label" for="female">@lang('form.female')</label>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="invalid-feedback" role="alert">
                                        @error('gender')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="password" class="col-sm-3 col-form-label">{{ __('form.password') }} :</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" @error('password') is-invalid @enderror"
                                            id="password" name="password">
                                    </div>
                                    <span class="invalid-feedback" role="alert">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-6 ps-2">
                                <div class="form-group row mb-2">
                                    <label for="lastName" class="col-sm-3 col-form-label">{{ __('form.last_name') }} :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" @error('lastName') is-invalid @enderror"
                                            id="lastName" name="lastName">
                                    </div>
                                    <span class="invalid-feedback" role="alert">
                                        @error('lastName')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="role" class="col-sm-3 col-form-label">{{ __('form.role') }} :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group @error('role') is-invalid @enderror">
                                            <select class="form-control" id="role" form="registration_form" name="role">
                                                <option value="admin">@lang('form.admin')</option>
                                                <option value="user">@lang('form.user')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <span class="invalid-feedback" role="alert">
                                        @error('role')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="displayPicture"
                                        class="col-sm-3 col-form-label">{{ __('form.display_picture') }} :</label>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <input type="file" class="form-control-file" id="displayPicture"
                                            name="displayPicture">
                                        <span class="text-danger">
                                    </div>
                                    <span class="invalid-feedback" role="alert">
                                        @error('displayPicture')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="confirmPassword" class="col-sm-3 col-form-label">{{ __('form.confirm_password') }} :</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" @error('confirmPassword') is-invalid @enderror"
                                            id="confirmPassword" name="confirmPassword">
                                    </div>
                                    <span class="invalid-feedback" role="alert">
                                        @error('confirmPassword')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
