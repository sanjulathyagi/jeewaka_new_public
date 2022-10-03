<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@include('Libraries.styles')
  </head>
  <body>

  <div class="site-wrap">
@include('components.header')

@yield('content')

@include('components.footer')
  </div>

@include('Libraries.scripts')

  </body>
</html>
