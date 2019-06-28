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

                    .card .elipse:before {
                        position: absolute;
                        padding: 4em;
                        background: #f2f2f2;
                        content: '';
                        margin: -5em;
                        border-radius: 50%;
                    }

                    .card .rank {
                        position: absolute;
                        width: 85px;
                        height: 85px;
                        left: 2px;
                        top: -20px;
                        font-size: 38px;
                        line-height: 110%;
                        letter-spacing: -0.05em;
                        color: #C4C4C4;
                    }

                    .nama-universitas {
                        top: 0;
                        color: #F26F08;
                        letter-spacing: -0.05em;
                    }
                </style>

                @foreach ($data_universitas as $item)
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="elipse">
                                        <div class="rank">
                                            {{ $no++ }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <img src="{{ asset('assets/img/kampus/' . $item->logo) }}" width="80">
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="nama-universitas">{{ $item->nama_universitas }}</h3>
                                    <hr>
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="col-sm-3">Peringkat</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
