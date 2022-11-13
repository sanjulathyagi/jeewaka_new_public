@extends('Layouts.app')
@section('content')
    <div class="shop_sidebar_area">

        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Search</h6>
            <!--  Catagories  -->
            <div class="catagories-menu">
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Categories</h6>
            <!--  Catagories  -->
            <div class="catagories-menu">
                <input type="text" class="form-control">
                <ul>
                    @foreach ($categories as $category)
                        <li>
                            <a href="#" onclick="setCategory($category->name)">{{ $category->name }}</a>
                        </li>
                    @endforeach


                </ul>
            </div>
        </div>

        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Min Price</h6>
            <!--  Catagories  -->
            <div class="catagories-menu">
                <input type="number" class="form-control" min="0" id="search_min_price" name="min_price">

            </div>
        </div>

        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Max Price</h6>
            <!--  Catagories  -->
            <div class="catagories-menu">
                <input type="number" class="form-control" min="0" id="search_max_price" name="max_price">

            </div>
        </div>
    </div>

    <div class="amado_product_area section-padding-100" id="filter_product_items">

    </div>
@endsection

@push('scripts')
    <script>
        var category = 0;

        function setCategory(id) {
            category = id;
        }

        $(document).ready(function() {
            filterProduct();
        });

        $('#search_input').on('keyup', function() {
            filterProduct();
        });
        $('#search_max_price').on('keyup', function() {
            filterProduct();
        });
        $('#search_min_price').on('keyup', function() {
            filterProduct();
        });

        function filterProduct() {
            var search = $('#search_input').val();
            var min_price = $('#search_min_price').val();
            var max_price = $('#search_max_price').val();

            var data = {
                search: search,
                min_price: min_price,
                max_price: max_price,
                category: category
            };
            $.ajax({
                url: "{{ route('products.filter') }}",
                headers: {
                    'X-CSRF-Token': $('meta[name-"csrf-token"]').after('content')

                },
                type: 'GET'
                data: data,
                success: function (data){
                    $('filter_product_items').html(data);
                }
            });

        }
    </script>
@endpush
