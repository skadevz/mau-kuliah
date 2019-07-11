<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="infobox-container">
        <div class="triangle-l"></div>
        <div class="triangle-r"></div>
        <div class="infobox-jurusan">
            <h3><span>Bandingkan Jurusan</span></h3>
            <p>
                @forelse ($m_jurusan as $data_jurusan)
                    <div class="card shadow paginate-jurusan jurusan-list">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-xs-12 col-sm-12  text-center">
                                    <div class="f_icon jurusan-list-logo">
                                        <img src="{{ asset('assets/img/kampus/' . $data_jurusan->logo) }}">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-12 col-xs-12 col-sm-12 content-kampus">
                                    <h4 class="nama-jurusan">{{ $data_jurusan->nama_jurusan }}</h4>
                                    <span class="alamat-universitas">
                                        <i class="fa fa-map-marker"></i> {{ $data_jurusan->nama_universitas }}
                                    </span>
                                    <p>
                                        <b>Akreditasi</b>
                                        <div style="padding-left: 20px;">
                                            <ul style="color:#888888; list-style-type:disc;">
                                                <li>
                                                    Jurusan : <span class="akreditasi">{{$data_jurusan->akreditasi_jurusan}}</span>
                                                </li>
                                                <li>
                                                    Kampus : <span class="akreditasi">{{$data_jurusan->akreditasi_universitas}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </p>
                                    <hr>
                                    <div class="custom-control custom-checkbox tombol-checkbox">
                                        <div class="fixer-container">
                                            <input type="checkbox" class="custom-control-input box-compare-jurusan" value="{{$data_jurusan->id_jurusan.'_'.$data_jurusan->id_universitas}}" id="customCheck-{{$data_jurusan->id_jurusan.'_'.$data_jurusan->id_universitas}}">
                                            <label class="custom-control-label" for="customCheck-{{$data_jurusan->id_jurusan.'_'.$data_jurusan->id_universitas}}">Bandingkan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{$no++}}
                @empty
                    Data jurusan tidak ditemukan
                @endforelse
                @if (count($m_jurusan) > 5)
                    <div id="page-nav-jurusan"></div>
                @endif
            </p>
        </div>
    </div>
</div>
