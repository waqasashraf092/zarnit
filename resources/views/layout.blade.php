<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <link rel="icon" type="image/png" href="{{ assert('favicon.ico') }}">
        <title>@yield('title', 'Laravel App')</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style-custom.css') }}">
        @yield('styles')
    </head>
    <body>
        @include('includes.navbar')

        <div id="smooth-wrapper" style="margin-top:100px">
            <div id="smooth-content">
                @yield('content')
                @include('includes.footer')
            </div>
        </div>

        <div id="preloader">
            <div class="preloader">
                <img src="{{ asset('images/preloader.gif') }}" alt="preloader">
            </div>
        </div>
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <script src="{{ asset('js/vendors.js') }}"></script>
        <script src="{{ asset('js/gsap-custom.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        @yield('scripts')
    </body>
</html>
