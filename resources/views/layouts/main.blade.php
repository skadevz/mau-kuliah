<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MAU KULIAH</title>
        <link rel="icon" href="{{ asset('assets/img/ico.ico') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/button.css') }}" />
    </head>

    <body>
    @include('layouts.menu')
    @yield('content')
    @include('layouts.footer')
    </body>
    <script src="{{ asset('assets/js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel2.thumbs.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
</html>
