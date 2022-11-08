<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/c866864c-cdfe-49b6-92cf-352e9804fd34.jpg') }} ">
    <title>
        Jeewaka Herbals Products
    </title>

    @include('libraries.styles')
    @php
        $curr_url = Route::currentRouteName();
    @endphp

</head>

<body>

    <div class="main-content-wrapper d-flex clearfix">

        @include('components.sidebar')

        @yield('content')

    </div>

    @include('components.footer')

    @include('libraries.scripts')

</body>

</html>
