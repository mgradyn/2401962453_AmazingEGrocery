<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::paginate(10);
        return view('home.home', ['items' => $items]);
    }

    public function view($item_id)
    {
        $item = Item::find($item_id);
        if ($item) {
            return view('home.detail_item', ['item' => $item]);
        }
        return redirect(route('home'));  
    }
}
