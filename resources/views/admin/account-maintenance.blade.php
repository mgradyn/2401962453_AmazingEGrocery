@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                @foreach ($accounts as $account)
                    <x-account-card :account="$account" />
                @endforeach
                <div class="d-flex justify-content-start">
                    {{ $accounts->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
