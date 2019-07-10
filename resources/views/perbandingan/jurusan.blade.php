<section id="section_perbandingan">
    <div class="container">
        <div id="fly-name" class="fly-name">
            <div class="data-wrap">
                <div class="row">
                    @foreach ($jenjuruniv as $key => $value)
                        <div class="list-compare-item col-md div-{{$value['id_jurusan'].'_'.$value['id_universitas']}}">
                            <span class="icon remove-compare-jurusan list-block-del" data-id="{{$value['id_jurusan'].'_'.$value['id_universitas']}}"></span>
                            <div class="kampus-name">
                                <table style="height: 100%">
                                    <tbody>
                                        <tr>
                                            <td class="list-img" align="center" valign="middle">
                                                <img src="{{asset('assets/img/kampus/' . $value['logo'])}}" alt="{{$value['nama_universitas']}}" scale="0">
                                            </td>
                                        </tr>
                                        <tr class="list-info">
                                            <td align="center" class="title" valign="middle"><span>{{$value['nama_universitas']}}</span></td>
                                        </tr>
                                        <tr class="list-info">
                                            <td align="center" class="title" valign="middle"><span>{{$value['nama_jurusan']}}</span></td>
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
            @foreach ($jenjuruniv as $key => $value)
                <div class="col-md list-block div-{{$value['id_jurusan'].'_'.$value['id_universitas']}}">
                    <span class="icon remove-compare-jurusan list-block-del" data-id="{{$value['id_jurusan'].'_'.$value['id_universitas']}}"></span>
                    <div class="list-img">
                        <img src="{{asset('assets/img/kampus/'. $value['logo'])}}">
                    </div>
                    <div class="list-info">
                        <div class="title">{{$value['nama_universitas']}}</div>
                        <div class="sub-title">{{$value['nama_jurusan']}}</div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="subhead">
                    <h3>Beasiswa Tersedia</h3>
                </div>
                <div class="data-wrap">
                    <div class="row">
                        @foreach ($jenjuruniv as $key => $value)
                            <div class="list-compare-item col-md div-{{$value['id_jurusan'].'_'.$value['id_universitas']}}">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="subhead">
                    <h3>Beasiswa Tersedia</h3>
                </div>
                <div class="data-wrap">
                    <div class="row">
                        @foreach ($jenjuruniv as $key => $value)
                            <div class="list-compare-item col-md div-{{$value['id_jurusan'].'_'.$value['id_universitas']}}">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="subhead">
                    <h3>Beasiswa Tersedia</h3>
                </div>
                <div class="data-wrap">
                    <div class="row">
                        @foreach ($jenjuruniv as $key => $value)
                            <div class="list-compare-item col-md div-{{$value['id_jurusan'].'_'.$value['id_universitas']}}">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="subhead">
                    <h3>Beasiswa Tersedia</h3>
                </div>
                <div class="data-wrap">
                    <div class="row">
                        <div class="list-compare-item col-md">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
