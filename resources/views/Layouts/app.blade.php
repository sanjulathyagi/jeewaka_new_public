<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jeewaka Herbal Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('Libraries.styles')

</head>

<body>
    @include('components.nav')

    @yield('content')

    @include('components.footer')

    @include('Libraries.scripts')
</body>

</html>
