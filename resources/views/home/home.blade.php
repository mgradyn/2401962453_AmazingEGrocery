@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="row p-4 mb-5 justify-content-center">
                @foreach ($items as $item)
                    <x-card :item="$item" />
                @endforeach
            </div>
            <div class="d-flex justify-content-end">
                {{ $items->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
