@extends('layouts.main')

@section('content')
    <section id="section_perbandingan">
        <div class="container">
            <div id="fly-name" class="fly-name">
                <div class="data-wrap">
                    <div class="row">
                        @foreach ($v_universitas_jurusan as $key => $data_universitas_jurusan)
                            <div class="list-compare-item col-md">
                                <div class="kampus-name">
                                    <table style="height: 100%">
                                        <tbody>
                                            <tr>
                                                <td align="center" valign="middle">
                                                    <img src="{{asset('assets/img/kampus/' . $data_universitas_jurusan->logo)}}" alt="{{$data_universitas_jurusan->nama_universitas}}" scale="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="middle"><span>{{$data_universitas_jurusan->nama_universitas}}</span></td>
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
                @foreach ($v_universitas_jurusan as $key => $data_universitas_jurusan)
                <div class="col-md list-block">
                    {{-- <div class="list-block"> --}}
                        <span class="icon list-block-del"></span>
                        <a href="" class="af-link-block"></a>
                        <div class="list-img">
                            <img src="{{asset('assets/img/kampus/' . $data_universitas_jurusan->logo)}}">
                        </div>
                        {{-- <div class="list-info">
                            <div class="title">{{$data_universitas_jurusan->nama_universitas}}</div>
                        </div> --}}
                    {{-- </div> --}}
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
                            @foreach ($v_universitas_jurusan as $key => $data_universitas_jurusan)
                                <div class="list-compare-item col-md">
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
                            @foreach ($v_universitas_jurusan as $key => $data_universitas_jurusan)
                                <div class="list-compare-item col-md">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
