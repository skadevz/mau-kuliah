@php
    $active_home = false;
    if (str_is(url()->current(), route('home'))) $active_home = true;

    $active_berita = false;
    if (str_is(route('berita.index') . '*', url()->current())) $active_berita = true;

    $active_pencarian = false;
    if (str_is(route('pencarian.index') . '*', url()->current())) $active_pencarian = true;

    $active_peringkat_universitas = false;
    if (str_is(route('peringkat_universitas'), url()->current())) $active_peringkat_universitas = true;
@endphp
<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <style media="screen">
                .navbar-nav > li {
                    float: left;
                    position: relative;
                }
                .navbar-light .navbar-nav .active a::after {
                    border-bottom: 5px solid #5bc0eb;
                    bottom: -10px;
                    content: " ";
                    left: 0;
                    position: absolute;
                    right: 0;
                }
                </style>

                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}"> <img width="202" src="{{ asset('assets/img/logo.png') }}"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                         id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item @if($active_home)active @endif">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item @if($active_berita)active @endif">
                                <a class="nav-link" href="{{ route('berita.index') }}">Berita</a>
                            </li>
                            <li class="nav-item @if($active_pencarian)active @endif">
                                <a class="nav-link" href="{{ route('pencarian.index') }}">Cari Universitas</a>
                            </li>
                            <li class="nav-item @if($active_peringkat_universitas)active @endif">
                                <a class="nav-link" href="{{ route('peringkat_universitas') }}">Peringkat Universitas</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->
