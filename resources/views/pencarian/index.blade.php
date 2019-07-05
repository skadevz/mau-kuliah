@extends('layouts.main')

@section('content')
    <section class="banner_part_search">
        <div class="container">
            <div class="align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <div class="row-search">
                                <div class="input-group">
                                    <input type="text" class="form-control form-search"
                                    placeholder="Universitas, Jurusan, atau Bidang Kerja"
                                    aria-label="Input group example" aria-describedby="btnGroupAddon">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text searchButton">
                                            <i class="fa fa-search" aria-hidden="true"></i> Search
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($value)
                                <p>Hasil Pencarian "{{ $value }}"</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="search-box">
        <div class="container">
            <div class="col-md-12 mb-3">
                <div class="row card shadow py-3 px-3 mx-0">
                    <form>
                        <div class="form-row">
                            <div class="col-md-3">
                                <select id="select-lokasi-kampus" name="states[]" multiple="multiple" style="width: 100%">
                                    @foreach ($m_lokasi as $item)
                                        <optgroup label="{{ $item->nama }}">
                                            @foreach ($item->kota as $kota)
                                                <option value="{{ $kota->id_kota }}">{{$kota->nama}}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="select-tipe-kampus" style="width: 100%">
                                    <option value="all">Negeri / Swasta</option>
                                    <option value="negeri">Negeri</option>
                                    <option value="swasta">Swasta</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="select-akreditasi-kampus" style="width: 100%">
                                    <option value="all">Semua Akreditasi</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="select-sistem-perkuliahan" style="width: 100%">
                                    <option value="all">Semua Sistem Perkuliahan</option>
                                    <option value="1">Reguler</option>
                                    <option value="2">Online</option>
                                    <option value="3">Karyawan Malam</option>
                                    <option value="4">Karyawan Sabtu - Minggu</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="infobox-container">
                        <div class="triangle-l"></div>
                        <div class="triangle-r"></div>
                        <div class="infobox-universitas">
                            <h3><span>Bandingkan Kampus</span></h3>
                            <p class="mt-4">
                                @foreach ($m_universitas as $data_universitas)
                                    <div class="card shadow paginate-universitas univ-list">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 col-xs-12 col-sm-12  text-center">
                                                    <div class="f_icon univ-list-logo">
                                                        <img src="{{ asset('assets/img/kampus/' . $data_universitas->logo) }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-12 col-xs-12 col-sm-12 content-kampus">
                                                    <h4 class="nama-universitas">{{ $data_universitas->nama_universitas }}</h4>
                                                    <span class="alamat-universitas">
                                                        <i class="fa fa-map-marker"></i> {{ $data_universitas->alamat_universitas }}
                                                    </span>
                                                    <p>
                                                        Akreditasi : <span class="akreditasi">{{$data_universitas->akreditasi_universitas}}</span>
                                                    </p>
                                                    <hr>
                                                    <div class="custom-control custom-checkbox tombol-checkbox">
                                                        <div class="fixer-container">
                                                            <input type="checkbox" class="custom-control-input box-compare-universitas" value="{{$data_universitas->id_universitas}}" id="customCheck-{{$data_universitas->id_universitas}}">
                                                            <label class="custom-control-label" for="customCheck-{{$data_universitas->id_universitas}}">Bandingkan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{$no++}}
                                @endforeach
                                <div id="page-nav-universitas"></div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="infobox-container">
                        <div class="triangle-l"></div>
                        <div class="triangle-r"></div>
                        <div class="infobox-jurusan">
                            <h3><span>Bandingkan Jurusan</span></h3>
                            <p>
                                @foreach ($m_jurusan as $data_jurusan)
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
                                @endforeach
                                <div id="page-nav-jurusan"></div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="comparison" class="close">
        <div class="compare-hidden-toggle"></div>
        <div class="close-btn comparison-close-btn">×</div>
        <div class="comparison-wrapper">
            <div class="comparison-title">
                <h3 class="title">
                    <input type="hidden" name="flag_compare" id="flag_compare" class="flag_compare" value="0">
                    Perbandingan Produk
                </h3>
                <p class="info">Produk ditambahkan ke perbandingan. Tambahkan hingga 4 produk atau melanjutkan untuk melihat perbandingan produk yang dipilih.</p>
            </div>
            <div class="comparison-items">
                <ul class="comparison-ul"></ul>
            </div>
            <a class="go-to-compare" onclick="prosesSubmitBanding('{{route('perbandingan.index')}}', '{{ csrf_token() }}')">Bandingkan</a>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.searchButton').on('click', function () {
                var token = '{{ csrf_token() }}'
                search(token);
            });

            $('.form-search').keydown(function (e) {
                if (e.keyCode == 13) {
                    var token = '{{ csrf_token() }}'
                    search(token);
                }
            })
        })
    </script>
@endsection
