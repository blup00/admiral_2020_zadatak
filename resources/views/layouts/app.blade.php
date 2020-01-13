<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" >
        <title>ADMIRAL</title>

    </head>
    <body>
      
    <nav class="navbar navbar-light bg-dark">
        <img src="http://admiralcasino.ba/Home_files/logo.png" class="mx-auto d-block" width="auto" height="80" alt="logo">

    </nav>
        <div class="container">
            @include('inc/messages')
            @yield('content')
        </div>
    </body>
</html>