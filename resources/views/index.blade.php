@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex col-md-8 justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center rounded-circle bg-white"
                    style="width: 40vw; height: 40vw; border: 12px solid #f5da55;">
                    <div class="d-flex row">
                        <h2 class="text-center mb-5">{{ isset($title) ? __($title) : __('index.title') }}</h2>
                        @isset($message)
                            <h4 class="text-center mb-5">{{ __($message) }}</h4>
                        @endisset
                        @isset($link)
                            <a class="text-center" href="{{ route('home') }}">{{ __('index.go_home') }}</a>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
