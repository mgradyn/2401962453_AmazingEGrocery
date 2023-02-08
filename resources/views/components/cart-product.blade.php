<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-3 d-flex justify-content-center">
            <img src="{{ asset('item_image/item.jpg') }}" class="p-3 img-fluid rounded-start" alt="product photo"
                style="min-width: 160px; min-height: 160px;">
        </div>
        <div class="col-md-4">
            <div class="card-body h-100 d-flex align-items-center">
                <h3 class="card-title">{{ $item->item()->first()->item_name }}</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-body h-100 d-flex align-items-center">
                <div class="row">
                    <div class="col">
                        <h3 class="card-title">{{ 'Rp. ' . ' ' . $item->item()->first()->price }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card-body d-flex justify-content-end h-100 align-items-center">
                <form action="{{ route('delete-from-cart', ['order_id' => $item->order_id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">
                        {{ __('transaction.delete') }}
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
