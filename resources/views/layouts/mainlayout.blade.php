<!doctype html>
<html lang="en">
  <head>
    @include('layouts.partials.header')
    <title>@yield('judul-halaman')</title>
  </head>
  <body>
    
    @include('layouts.partials.navbar')

    @yield('kontennya')

    @include('layouts.partials.footer')

    @include('layouts.partials.script')
      
  </body>
</html>
