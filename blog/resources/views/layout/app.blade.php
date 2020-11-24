<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <title>Home Page 01</title>

    </head>
    <body>

      @include('inc.navbar')

      <div class="container" style="margin: 40px;">
      
        @yield('content')
      </div>

        
    </body>
</html>
