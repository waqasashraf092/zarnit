<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <title>@yield('title', 'Zarnit.com')</title>

        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/meanmenu.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
        <link href="{{ asset('css/color-switcher-design.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
        @yield('styles')
    </head>
    <body>
        <div class="page-wrapper">
            <!-- Cursor -->
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
            <!-- Cursor End -->

            <!-- Preloader -->
            <div class="preloader"></div>
            <!-- End Preloader -->

            @include('includes.header')
            @yield('content')
        </div>
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/appear.js') }}"></script>
        <script src="{{ asset('js/parallax.min.js') }}"></script>
        <script src="{{ asset('js/tilt.jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.paroller.min.js') }}"></script>
        <script src="{{ asset('js/wow.js') }}"></script>
        <script src="{{ asset('js/swiper.min.js') }}"></script>
        <script src="{{ asset('js/backtotop.js') }}"></script>
        <script src="{{ asset('js/odometer.js') }}"></script>
        <script src="{{ asset('js/parallax-scroll.js') }}"></script>
        <script src="{{ asset('js/gsap.min.js') }}"></script>
        <script src="{{ asset('js/SplitText.min.js') }}"></script>
        <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
        <script src="{{ asset('js/ScrollToPlugin.min.js') }}"></script>
        <script src="{{ asset('js/ScrollSmoother.min.js') }}"></script>
        <script src="{{ asset('js/typeit.js') }}"></script>
        <script src="{{ asset('js/jquery.marquee.min.js') }}"></script>
        <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/nav-tool.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/isotope.js') }}"></script>
        <script src="{{ asset('js/element-in-view.js') }}"></script>
        <script src="{{ asset('js/color-settings.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        @yield('scripts')
    </body>
</html>
