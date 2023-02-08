<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-3 p-2 d-flex justify-content-center">
            <img src="{{ asset('storage/account/display_picture/' . $account->display_picture_link) }}"
                class="img-fluid rounded border" alt="product photo" style="min-height: 180px; min-width: 180px;">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $account->first_name . ' ' . $account->last_name . ' - ' . $account->role()->first()->role_name }}
                </h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-body d-flex justify-content-end">
                <a href="{{ route('update-role', ['account_id' => $account->account_id]) }}"
                    class="btn btn-outline-warning me-1">{{ __('transaction.update_role') }}</a>


                <form action="{{ route('delete-account', ['account_id' => $account->account_id]) }}" method="POST">
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
