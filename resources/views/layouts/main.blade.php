<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>MAU KULIAH</title>
        <link rel="icon" href="{{ asset('assets/img/ico.ico') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/home_button_search.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/home_kampus_terdekat.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/home_info_beasiswa.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/home_berita_kampus.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/time_icon.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/search_box.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/search_compare.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/simplePagination.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    </head>

    <body>
    @include('layouts.menu')
    @yield('content')
    @include('layouts.footer')
    </body>
    <script src="{{ asset('assets/js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.simplePagination.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.redirect.js') }}"></script>
    @include('sweet::alert')
</html>
