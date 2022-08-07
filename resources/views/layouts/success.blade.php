<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

    <title>@yield('title')</title>
  </head>
  <body>
      @include('includes.navbar-alternate')
      @yield('content')
      
      @stack('prepend-script')
      @include('includes.script')
      @stack('addon-script')
  </body>
</html>
