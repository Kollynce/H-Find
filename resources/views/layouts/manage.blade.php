<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!---------------- CSRF Token -------------------------------->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'H-Find') }}</title>

    <!------------------ Fonts -------------------------------------->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!------------------ Styles -------------------------------------->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootsnav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">


</head>
<body>
<div id="app" >
    @include('inc.nav')
    @include('inc.sidenav')
    <main class="py-0">
        @yield('content')
    </main>
</div>

<!---------------------- Scripts -------------------------------------->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/bootsnav.js') }}" defer></script>
</body>
</html>
