@extends('Layouts.app')
@section('content')
<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Shopping Cart</h2>
                </div>

                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart_items as $cart_item)
                            <tr>
                                <td class="cart_product_img">
                                    <a href="#">
                                        @if ($cart_item->primaryImage)
                                        <img src="{{ config('image.access_path') }}/{{ $cart_item->primaryImage->image ? $cart_item->primaryImage->image->name : '' }}"
                                            alt="">
                                        @else
                                        <img src="{{ asset('img/no-image-png-2.png') }}">
                                        @endif
                                </td>
                                <td class="cart_product_desc">
                                    <h5>{{ $cart_item->product->name }}</h5>
                                </td>
                                <td class="price">
                                    <span>Rs{{ $cart_item->product->price  }}</span>
                                </td>
                                <td class="qty">
                                    <div class="qty-btn d-flex">
                                        <p>Qty</p>
                                        <div class="quantity">
                                            <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="{{ $cart_item->quantity }}">
                                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart_product_desc">
                                    <h5>{{ $cart_item->product->price * $cart_item->quantity}}</h5>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="cart-summary">
                    <h5>Cart Total</h5>
                    <ul class="summary-table">
                        <li><span>subtotal:</span> <span>Rs.{{ Auth::user()->getCartTotal() }}</span></li>
                        <li><span>delivery:</span> <span>Free</span></li>
                        <li><span>total:</span> <span>$140.00</span></li>
                    </ul>
                    <div class="cart-btn mt-100">
                        <a href="cart.html" class="btn amado-btn w-100">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
