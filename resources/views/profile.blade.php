@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row mt-4">
                    <div class="col-md-2 p-1 d-flex justify-content-center">
                        <img src="{{ asset('storage/account/display_picture/' . $account->display_picture_link) }}"
                            class="img-fluid rounded border" alt="display picture">
                    </div>
                    <div class="col-md-10">
                        <form method="POST" action="{{ route('update-profile', ['id' => $account->account_id]) }}"
                            id="registration_form" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group d-flex justify-content-between">
                                <div class="col-6 pe-2">
                                    <div class="form-group row mb-2">
                                        <label for="first_name" class="col-sm-3 col-form-label">{{ __('form.first_name') }}
                                            :</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="form-control
                                        @error('first_name') is-invalid @enderror"
                                                id="first_name" name="first_name" value="{{ $account->first_name }}">
                                        </div>
                                        @error('first_name')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label for="email" class="col-sm-3 col-form-label">{{ __('form.email') }}
                                            :</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ $account->email }}"">
                                        </div>
                                        <span class="text-danger" role="alert">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label for="gender" class="col-sm-3 col-form-label">{{ __('form.gender') }}
                                            :</label>
                                        <div class="col-sm-9 d-flex align-items-center">
                                            <div class="input-group-prepend @error('gender') is-invalid @enderror">
                                                <div class="form-check form-check-inline">
                                                    @if ($account->gender == 'Male')
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="male" value="Male" checked="checked">
                                                    @else
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="male" value="Male">
                                                    @endif
                                                    <label class="form-check-label"
                                                        for="male">{{ __('form.male') }}</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    @if ($account->gender == 'Female')
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="female" value="Female" checked="checked">
                                                    @else
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="female" value="Female">
                                                    @endif
                                                    <label class="form-check-label"
                                                        for="female">{{ __('form.female') }}</label>
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
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" id="password"
                                                name="password">
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
                                            <input type="text"
                                                class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                                                name="last_name" value="{{ $account->last_name }}">
                                        </div>
                                        <span class="text-danger" role="alert">
                                            @error('last_name')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group row mb-2">
                                        <label for="role" class="col-sm-3 col-form-label">{{ __('form.role') }}
                                            :</label>
                                        <div class="col-sm-9">
                                            <div class="input-group @error('role') is-invalid @enderror">
                                                <select class="form-control" id="role" form="registration_form"
                                                    name="role">
                                                    @if ($account->role == 'Admin')
                                                        <option value="Admin" selected="selected">
                                                            {{ __('form.admin') }}</option>
                                                        <option value="User">
                                                            {{ __('form.user') }}</option>
                                                    @else
                                                        <option value="Admin">
                                                            {{ __('form.admin') }}</option>
                                                        <option value="User" selected="selected">
                                                            {{ __('form.user') }}</option>
                                                    @endif
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
                                            class="col-sm-3 col-form-label">{{ __('form.display_picture') }}
                                            :</label>
                                        <div class="col-sm-9 d-flex align-items-center">
                                            <input type="file"
                                                class="form-control @error('display_picture') is-invalid @enderror"
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
                                            class="col-sm-3 col-form-label">{{ __('form.confirm_password') }}
                                            :</label>
                                        <div class="col-sm-9">
                                            <input type="password"
                                                class="form-control
                                        @error('password') is-invalid @enderror"
                                                id="password-confirm" name="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center row">
                                <div class="w-auto mb-2 mt-4">
                                    <div class="col text-center" style="background-color: #f5da55 !important">
                                        <button type="submit" class="btn">
                                            {{ __('form.save') }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
