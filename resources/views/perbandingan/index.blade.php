@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/compare.css') }}" />
@endsection
@section('content')
    <div class="container">
        <div class="subhead-back">
            {{-- <h3>Hasil Perbandingan Universitas Terbaik di Indonesia</h3> --}}
            <a href="javascript:void(0)" onclick="window.history.back()"> < Kembali ke Halaman Pencarian </a>
        </div>
    </div>
    @if ($tampilan == 'universitas')
        <section id="section_perbandingan">
            <div class="container">
                <div id="fly-name" class="fly-name">
                    <div class="data-wrap">
                        <div class="row">
                            @foreach ($m_universitas as $key => $data_universitas)
                                <div class="list-compare-item col-md div-{{$data_universitas->id_universitas}}">
                                    <span class="icon remove-compare-universitas list-block-del" data-id="{{$data_universitas->id_universitas}}"></span>
                                    <div class="kampus-name">
                                        <table style="height: 100%">
                                            <tbody>
                                                <tr>
                                                    <td class="list-img" align="center" valign="middle">
                                                        <img src="{{asset('assets/img/kampus/' . $data_universitas->logo)}}" alt="{{$data_universitas->nama_universitas}}" scale="0">
                                                    </td>
                                                </tr>
                                                <tr class="list-info">
                                                    <td align="center" class="title" valign="middle"><span>{{$data_universitas->nama_universitas}}</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($m_universitas as $key => $data_universitas)
                        <div class="col-md list-block div-{{$data_universitas->id_universitas}}">
                            <span class="icon remove-compare-universitas list-block-del" data-id="{{$data_universitas->id_universitas}}"></span>
                            <div class="list-img">
                                <img src="{{asset('assets/img/kampus/' . $data_universitas->logo)}}">
                            </div>
                            <div class="list-info">
                                <div class="title">{{$data_universitas->nama_universitas}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="subhead">
                            <h3>Alamat Universitas</h3>
                        </div>
                        <div class="data-wrap">
                            <div class="row">
                                @foreach ($m_universitas as $key => $data_universitas)
                                    <div class="list-compare-item col-md div-{{$data_universitas->id_universitas}}">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--    -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="subhead">
                            <h3>Beasiswa Tersedia</h3>
                        </div>
                        <div class="data-wrap">
                            <div class="row">
                                @foreach ($m_universitas as $key => $data_universitas)
                                    <div class="list-compare-item col-md div-{{$data_universitas->id_universitas}}">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        @include('perbandingan/jurusan')
    @endif
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('assets/js/perbandingan.js') }}"></script>
@endsection
