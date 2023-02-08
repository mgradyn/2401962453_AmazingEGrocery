<div class="card m-2" style="width: 18rem;">
    <img src="{{ asset('item_image/item.jpg') }}" class="card-img-top p-2" alt="item image">
    <div class="card-body">
        <h5 class="card-title">{{ $item->item_name }}</h5>
        <a href=" }}" class="btn btn-primary">Detail</a>
    </div>
</div>
{{-- {{ route('detail-item', ['id' => $item->item_id]) --}}