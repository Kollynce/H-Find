<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>H-Find</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootsnav.css') }}" rel="stylesheet">
        <link href="{{ asset('css/reality-icon.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/foundation-icon.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/closedhand.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cudeportfolio.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/editor.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navigation.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/range-Slider.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('css/search.css') }}" rel="stylesheet">

    </head>
    <body>
        @include('inc.nav')
            <main>
                @include('inc.slider')
                <div>
                    @include('inc.deals')
                    @include('inc.homeparallax')
                    @include('inc.homeagents')
                </div>
            </main>
        @include('inc.footer')

        <a href="#" class="back-to" style="display: block;"><i class="icon-arrow-up2"></i></a>

        <!---------------------- Scripts -------------------------------------->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/bootsnav.js') }}" defer></script>
        <script src="{{ asset('js/editor.js') }}" defer></script>
        <script src="{{ asset('js/jquery-2.1.4.js') }}" defer></script>
        <script src="{{ asset('js/selectbox-0.2.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.parallax-1.1.3.js') }}" defer></script>
        <script src="{{ asset('js/custom.js') }}" defer></script>
        <script src="{{ asset('js/contact.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('js/dropzone.js') }}" defer></script>
        <script src="{{ asset('js/gmaps.js.js') }}" defer></script>
        <script src="{{ asset('js/google-map.js') }}" defer></script>
        <script src="{{ asset('js/google-map-one.js') }}" defer></script>
        <script src="{{ asset('js/jquery.appear.js') }}" defer></script>
        <script src="{{ asset('js/jquery.cubeportfolio.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.fancybox.js') }}" defer></script>
        <script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.themepunch.tools.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery-countTo.js') }}" defer></script>
        <script src="{{ asset('js/masonry.pkgd.min.js') }}" defer></script>
        <script src="{{ asset('js/near-by-place.js') }}" defer></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
        <script src="{{ asset('js/range-Slider.js') }}" defer></script>
        <script src="{{ asset('js/revolution.extension.action.min.js') }}" defer></script>
        <script src="{{ asset('js/revolution.extension.layeranimation.min.js') }}" defer></script>
        <script src="{{ asset('js/revolution.extension.navigation.min.js') }}" defer></script>
        <script src="{{ asset('js/revolution.extension.parallax.min.js') }}" defer></script>
        <script src="{{ asset('js/revolution.extension.slideanims.min.js') }}" defer></script>
        <script src="{{ asset('js/revolution.extension.video.min.js') }}" defer></script>
        <script src="{{ asset('js/zelect.js') }}" defer></script>
        <script src="{{ asset('js/function.js') }}" defer></script>

    </body>
</html>
