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
        <link href="{{ asset('css/reality-icon.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/closedhand.css') }}" rel="stylesheet">
        <link href="{{ asset('css/editor.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navigation.css') }}" rel="stylesheet">
        <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('css/search.css') }}" rel="stylesheet">


    </head>
    <body>
        <div id="app" >
            <div>
                @if(Request::is('profile'))
                    @include('inc.navmin2')
                @endif
            </div>

            @include('inc.nav')
            <main class="py-0">
                <div class="pb-0">
                    @include('inc.parallax')
                </div>
                @yield('content')
            </main>
            @include('inc.footer')
            <a href="#" class="back-to" style="display: block;"><i class="icon-arrow-up2"></i></a>
        </div>


        <!---------------------- Scripts -------------------------------------->

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/bootsnav.js') }}" defer></script>
        <script src="{{ asset('js/editor.js') }}" defer></script>
        <script src="{{ asset('js/jquery-2.1.4.js') }}" defer></script>
        <script src="{{ asset('js/selectbox-0.2.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.parallax-1.1.3.js') }}" defer></script>
        <script src="{{ asset('js/custom.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.appear.js') }}" defer></script>
        <script src="{{ asset('js/jquery.cubeportfolio.min.js') }}" defer></script>

        <script type="text/javascript">
            $("#txtEditor").Editor();
            $('[data-toggle="tooltip"]').tooltip();
        </script>
    </body>
</html>
