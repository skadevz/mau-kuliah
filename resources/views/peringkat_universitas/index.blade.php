@extends('layouts.main')

@section('content')

    <div class="container" style="margin-top: 10em; margin-bottom: 4em;">
        <div class="row">
            <div class="col-sm">
                <div class="card shadow-sm mb-5">
                    <div class="card-body">
                        <h5 class="card-title">Peringkat Universitas</h5>
                        <h6 class="card-subtitle mb-2 text-muted">10 Universitas Terbaik</h6>
                        <p class="card-text">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{ asset('assets/img/rank.png') }}" alt="">
                                </div>
                                <div class="col-sm-8">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <br>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>

                <style media="screen">
                    .card {
                        position: relative;
                        overflow: hidden;
                    }

                    div.card .elipse:before {
                        position: absolute;
                        padding: 4em;
                        background: #f2f2f2;
                        content: '';
                        margin: -5em;
                        border-radius: 50%;
                    }

                    div.card .rank {
                        position: absolute;
                        left: 2px;
                        top: -20px;
                        font-size: 38px;
                        line-height: 110%;
                        letter-spacing: -0.05em;
                        color: #C4C4C4;
                    }

                    h3.nama-universitas {
                        top: 0;
                        color: #F26F08;
                        letter-spacing: -0.05em;
                    }

                    span.alamat-universitas {
                        color: #4B4B4B;
                        font-size: 0.9em;
                    }

                    .fa.fa-map-marker {
                        color: #D5D5D5;
                    }

                    .card-body hr {
                        margin: 0;
                    }

                    div.rating {
                        margin-top: 1em;
                    }

                    i, div.text-yellow {
                        color: #F8AD01;
                    }

                    .logo-universitas {
                        max-width: 100%;
                        max-height: 100%;
                        width: auto;
                        height: auto;
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        margin: auto;
                    }
                </style>

                @foreach ($data_universitas as $item)
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="elipse">
                                        <div class="rank">
                                            {{ $no }}
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/img/kampus/' . $item->logo) }}" class="logo-universitas">
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="nama-universitas">{{ $item->nama_universitas }}</h3>
                                    <hr>
                                    <span class="alamat-universitas">
                                        <i class="fa fa-map-marker"></i> {{ $item->alamat_universitas }}
                                    </span>
                                    <br>
                                    <div class="row rating">
                                        <div class="col-sm-4">
                                            <h3 class="text-dark">Rating 5.0</h3>
                                        </div>
                                        <div class="col-sm-3 text-yellow">
                                            @for ($i=0; $i < 4; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <i class="fa fa-caret-right text-yellow"></i> Ranking #{{ $no }} dari 4.913 kampus
                                    <br>
                                    <i class="fa fa-caret-right text-yellow"></i> #144{{ $no++ }} Ranking dunia menurut Webbo
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
