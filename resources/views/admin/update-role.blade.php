@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div>
                    <h3 class="text-left"><u>{{ $account->first_name . ' ' . $account->last_name }}</u></h3>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4 p-1 d-flex justify-content-center">
                        <img src="{{ asset('storage/account/display_picture/' . $account->display_picture_link) }}"
                            class="img-fluid rounded border" alt="display picture">
                    </div>
                    <div class="col-md-8">
                        <form method="POST" action="{{ route('change-role', ['account_id' => $account->account_id]) }}"
                            id="registration_form" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group d-flex justify-content-between">
                                <div class="col-6 pe-2">
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
                                    <div class="d-flex justify-content-end row">
                                        <div class="w-auto mb-2 mt-4">
                                            <div class="col text-center" style="background-color: #f5da55 !important">
                                                <button type="submit" class="btn">
                                                    {{ __('form.save') }}
                                                </button>
                                            </div>
                                        </div>
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
