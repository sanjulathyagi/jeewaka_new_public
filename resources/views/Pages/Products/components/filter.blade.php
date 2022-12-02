<div class="container-fluid">
    <div class="row">
        @forelse ($products as $product)
            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <a href="{{ route('products.view',$product->id) }}">
                <div class="single-product-wrapper">
                    <!-- Product Image -->
                    <div class="product-img">
                        @if ($product->primaryImage)
                            <img src="{{ config('image.access_path') }}/{{ $product->primaryImage->image ? $product->primaryImage->image->name : '' }}"
                                alt="">
                            <img class="hover-img"
                                src="{{ config('image.access_path') }}/{{ $product->primaryImage->image ? $product->primaryImage->image->name : '' }}"
                                alt="">
                        @else
                            <img src="{{ asset('img/no-image-png-2.png') }}">
                            <!-- Hover Thumb -->
                            <img class="hover-img"
                                src="{{ asset('img/no-image-png-2.png') }}">
                        @endif
                    </div>
                    <!-- Product Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">from RS.{{ $product->price }}</p>
                                <a href="product-details.html">
                                    <h6>{{ $product->name }}</h6>
                                </a>
                            </div>
                            <!-- Ratings & Cart -->
                            <div class="ratings-cart text-right">
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="cart">
                                    <a href="cart.html" data-toggle="tooltip" data-placement="left"
                                        title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                </div>
                            </div>
                    </div>
                </div>
                </a>
            </div>
        @empty
            <img src="{{ asset('img\bg-img\empty.gif') }}" alt="">
        @endforelse

    </div>

    <div class="row">
        <div class="col-12">
            <!-- Pagination -->
            <nav aria-label="navigation" class="navigation">
                {!! $products->links() !!}

            </nav>
        </div>
    </div>
</div>
