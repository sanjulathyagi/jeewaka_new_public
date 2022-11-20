<div class="container-fluid">

    <div class="row">

        @forelse ($products as $product)
            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <div class="single-product-wrapper">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img src="img/product-img/product1.jpg" alt="">
                        <!-- Hover Thumb -->
                        <img class="hover-img" src="img/product-img/product2.jpg" alt="">
                    </div>

                    <!-- Product Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">$180</p>
                            <a href="product-details.html">
                                <h6>Modern Chair</h6>
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
                                <a href="cart.html" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img
                                        src="img/core-img/cart.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse




    </div>

    <div class="row">
        <div class="col-12">
            <!-- Pagination -->
            <nav aria-label="navigation">
                <ul class="pagination justify-content-end mt-50">
                    <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                    <li class="page-item"><a class="page-link" href="#">02.</a></li>
                    <li class="page-item"><a class="page-link" href="#">03.</a></li>
                    <li class="page-item"><a class="page-link" href="#">04.</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
