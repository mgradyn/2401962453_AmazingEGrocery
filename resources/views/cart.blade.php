@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5 d-flex" style="min-height: 100%">
        <div class="d-flex justify-content-center row" style="flex:1 !important">
            <div>
                <h3 class="text-left"><u>{{ __('page.cart') }}</u></h3>
            </div>
            <div class="col" style="flex:1 !important">
                <div class="row-md-10" style="min-height: 80%">
                    @foreach ($items as $item)
                        <x-cart-product :item="$item" />
                    @endforeach
                </div>
                <div class="row-md-2">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6 ms-auto">
                        <div class="row justify-content-md-end">
                            <h5 class="text-end">{{ __('transaction.total') . ('  :  Rp. ' . $totalPrice) }}</h5>
                        </div>
                        <div class="row-md-auto p-2 d-flex align-items-center justify-content-end">
                            <form method="POST" action="{{ route('check-out') }}" id="check-out"
                                enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn mt-5" style="background-color: #f5da55 !important">
                                    {{ __('transaction.check_out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
