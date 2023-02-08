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

public function cart()
{
    $items = Order::where('account_id', Auth::user()->account_id)->get();
    $totalPrice = 0;
    foreach($items as $item)
    {
        $totalPrice = $totalPrice + $item->item()->first()->price;
    }

    return view('cart', ['items' => $items, 'totalPrice' => $totalPrice]); 
}

public function checkOut()
{
    $items = Order::where('account_id', Auth::user()->account_id)->get();

    foreach($items as $item)
    {
        $item->delete();
    }

    return redirect(route('home'));
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
    
public function destroyItem($order_id)
{
    $order = Order::find($order_id);

    if($order){
        $order->delete();
    }
    return redirect(route('cart'));
}
}
