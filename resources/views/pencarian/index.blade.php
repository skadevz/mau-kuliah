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
                            <p>Hasil Pencarian "Programmer"</p>
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
                                    <optgroup label="Swedish Cars">
                                        <option value="AL">Alabama</option>
                                        <option value="AB">Alabama</option>
                                    </optgroup>
                                    <optgroup label="Swedish Cassrs">
                                        <option value="AC">Alabama</option>
                                        <option value="AD">Alabama</option>
                                        <option value="AE">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
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
                                &nbsp;
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
                        <div class="infobox">
                            <h3><span>Bandingkan Kampus</span></h3>
                            <p class="mt-4">
                                @foreach ($m_universitas as $item)
                                    <div class="card shadow paginate univ-list">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 col-xs-12 col-sm-12  text-center">
                                                    <div class="f_icon univ-list-logo">
                                                        <img src="{{ asset('assets/img/kampus/' . $item->logo) }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-12 col-xs-12 col-sm-12 content-kampus">
                                                    <h4 class="nama-universitas">{{ $item->nama_universitas }}</h4>
                                                    <span class="alamat-universitas">
                                                        <i class="fa fa-map-marker"></i> {{ $item->alamat_universitas }}
                                                    </span>
                                                    <p>
                                                        Akreditasi : <span class="akreditasi">{{$item->akreditasi_universitas}}</span>
                                                    </p>
                                                    <hr>
                                                    <div class="custom-control custom-checkbox tombol-checkbox">
                                                        <div class="fixer-container">
                                                            <input type="checkbox" class="custom-control-input box-compare" value="{{$item->id_universitas}}" id="customCheck-{{$item->id_universitas}}">
                                                            <label class="custom-control-label" for="customCheck-{{$item->id_universitas}}">Bandingkan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{$no++}}
                                @endforeach
                                <div id="page-nav"></div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="infobox-container">
                        <div class="triangle-l"></div>
                        <div class="triangle-r"></div>
                        <div class="infobox">
                            <h3><span>Bandingkan Jurusan</span></h3>
                            <p>
                                This is the content of the infobox.
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
            <a class="go-to-compare">Bandingkan</a>
        </div>
    </div>
@endsection
