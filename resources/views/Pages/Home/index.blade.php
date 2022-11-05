@extends('Layouts.app')
@section('content')
    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">

            @foreach ($products as $product)
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        @if ($product->primaryImage)
                            <img src="{{ config('image.access_path') }}/{{ $product->primaryImage->image ? $product->primaryImage->image->name : '' }}"
                                width="100px" alt="">
                        @else
                            <img src="{{ asset('assets/img/no-image-png-2.png') }}">
                        @endif

                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From Rs. {{ $product->price }}</p>
                            <h4>{{ $product->name }}</h4>
                        </div>
                    </a>
                </div>
        </div>
        @endforeach
    </div>
    <!-- Product Catagories Area End -->
@endsection
