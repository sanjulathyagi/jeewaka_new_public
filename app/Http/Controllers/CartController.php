<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends ParentController
{
    public function index()
    {
        $response['cart_items'] = CartItem::where('customer_id', Auth::id())->get();
        return view('Pages.Cart.index')->with($response);
    }
}
