<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addToCart($item_id)
    {
        $item = Item::find($item_id);

        $cart = Order::firstOrCreate([
            'account_id' => Auth::user()->account_id,
            'item_id' => $item_id,
            'price' => $item->price
        ]);
        return redirect(route('home')); 
    }
    
    public function destroyItem($item_id)
    {
        $item = Item::find($item_id);

        if($item){
            $item->delete();
        }
        return redirect(route('cart'));
    }
}
