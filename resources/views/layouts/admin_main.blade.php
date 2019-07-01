<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MAU KULIAH</title>
    <link rel="icon" href="{{ asset('assets/img/ico.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/admin/dashboard.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
</head>

<body>

    @php
        $active_dashboard = false;
        if (str_is(url()->current(), route('admin.dashboard'))) $active_dashboard = true;

        $active_universitas = false;
        if (str_is(route('universitas.index') . '*', url()->current())) $active_universitas = true;
    @endphp

    <nav class="navbar navbar-expand-md sticky-top p-0 navbar-dark bg-dark">
        <a class="navbar-brand mr-0" href="#" style="background-color: inherit; box-shadow: inherit; padding-left: 15px;">MauKuliah</a>
        <div class="d-flex flex-grow-1 mr-2">
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-right mr-2" id="myNavbar7">
            <ul class="navbar-nav ml-auto flex-nowrap">
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link @if ($active_dashboard) active @endif" href="{{ route('admin.dashboard') }}">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if ($active_universitas) active @endif" href="{{ route('universitas.index') }}">
                                <span data-feather="wind"></span>
                                Universitas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="command"></span>
                                Jurusan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="chevrons-up"></span>
                                Jenjang
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                    <h1 class="h1">@yield('page_name')</h1>
                </div>

                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    @yield('script')
</body>
</html>
