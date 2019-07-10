<section id="section_perbandingan">
    <div class="container">
        <div class="row">
            @foreach ($jenjuruniv as $key => $value)
                <div class="col-md list-block {{$value['id_universitas'].'_'.$value['id_universitas']}}">
                    <span class="icon icon-af-Product_compare_Close list-block-del"></span>
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
                            <div class="list-compare-item col-md {{$value['id_universitas'].'_'.$value['id_universitas']}}">
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
                            <div class="list-compare-item col-md {{$value['id_universitas'].'_'.$value['id_universitas']}}">
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
                            <div class="list-compare-item col-md {{$value['id_universitas'].'_'.$value['id_universitas']}}">
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
