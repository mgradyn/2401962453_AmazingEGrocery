@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4 p-4 d-flex justify-content-center">
                            <img src="{{ asset('item_image/item.jpg') }}" class="img-fluid rounded border" alt="item photo">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{ $item->item_name }}</h3>
                                <div class="row mt-4">
                                    <div class="col-md-3" scope="row">{{ __('Detail') }}</div>
                                    <div class="col">{{ $item->item_desc }}</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3" scope="row">{{ __('Price') }}</div>
                                    <div class="col">{{ 'Rp. ' . ' ' . $item->price }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                        <form method="POST" action="{{ route('add-to-cart', ['item_id' => $item->item_id]) }}"
                                        id="add_cart_form" enctype="multipart/form-data">
                                        @csrf
                                        <button type="submit" class="btn mt-5"
                                            style="background-color: #f5da55 !important">
                                            {{ __('transaction.buy') }}
                                        </button>
                                        </form>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
