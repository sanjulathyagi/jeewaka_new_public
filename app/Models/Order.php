<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'introduction',

    ];

    public function checkoutItem()
    {
        $cart_items = CartItem::where('customer_id', Auth::id())->get();
        foreach($cart_items as $cart_item){
            Order::create([
                'customer_id' =>Auth::id(),
                'product_id' =>$cart_item->product_id,
                'quantity' =>$cart_item->quantity,
            ]);
            $cart_item->delete();
        }
    }

}
