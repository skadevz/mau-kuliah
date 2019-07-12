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
                                    <input type="text" id="input_search" class="form-control form-search"
                                    placeholder="Universitas, Jurusan, atau Bidang Kerja"
                                    aria-label="Input group example" aria-describedby="btnGroupAddon"
                                    value="{{$value}}">
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
                                <select id="select-lokasi-kampus" style="width: 100%">
                                    <option value="all">Semua Lokasi</option>
                                    @foreach ($m_lokasi as $item)
                                        <optgroup label="{{ $item->nama }}">
                                            @foreach ($item->kota as $kota)
                                                <option value="{{ $kota->id_kota }}" @if($kota->id_kota == $lokasi_kampus) selected @endif>{{$kota->nama}}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="select-tipe-kampus" style="width: 100%">
                                    <option value="all">Semua Tipe</option>
                                    <option value="negeri" @if($tipe_kampus == 'negeri') selected @endif>Negeri</option>
                                    <option value="swasta" @if($tipe_kampus == 'swasta') selected @endif>Swasta</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="select-akreditasi-kampus" style="width: 100%">
                                    <option value="all" selected>Semua Akreditasi</option>
                                    <option value="A" @if($akreditasi_kampus == 'A') selected @endif>A</option>
                                    <option value="B" @if($akreditasi_kampus == 'B') selected @endif>B</option>
                                    <option value="C" @if($akreditasi_kampus == 'C') selected @endif>C</option>
                                    <option value="D" @if($akreditasi_kampus == 'D') selected @endif>D</option>
                                    <option value="E" @if($akreditasi_kampus == 'E') selected @endif>E</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="select-sistem-perkuliahan" style="width: 100%">
                                    <option value="all">Semua Sistem Perkuliahan</option>
                                    <option value="1" @if($sistem_perkuliahan == 1) selected @endif>Reguler</option>
                                    <option value="2" @if($sistem_perkuliahan == 2) selected @endif>Online</option>
                                    <option value="3" @if($sistem_perkuliahan == 3) selected @endif>Karyawan Malam</option>
                                    <option value="4" @if($sistem_perkuliahan == 4) selected @endif>Karyawan Sabtu - Minggu</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                @include('pencarian.universitas')
                @include('pencarian.jurusan')
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
                    Perbandingan <span class="nama-banding"></span>
                </h3>
                <p class="info"><span class="nama-banding"></span> ditambahkan ke perbandingan. Tambahkan hingga 3 <span class="nama-banding"></span> atau melanjutkan untuk melihat perbandingan <span class="nama-banding"></span> yang dipilih.</p>
            </div>
            <div class="comparison-items">
                <ul class="comparison-ul"></ul>
            </div>
            <div class="btn-group go-to-compare" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-info" onclick="prosesSubmitBanding('{{route('perbandingan.index')}}', '{{ csrf_token() }}')">
                  Bandingkan
              </button>
              <button type="button" class="btn btn-danger" onclick="clearCookiesPerbandingan()">Clear</button>
            </div>
            {{-- <a class="go-to-compare" onclick="prosesSubmitBanding('{{route('perbandingan.index')}}', '{{ csrf_token() }}')">Bandingkan</a> --}}
            {{-- <a class="go-to-clear" onclick="prosesSubmitBanding('{{route('perbandingan.index')}}', '{{ csrf_token() }}')">Clear</a> --}}
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('assets/js/pencarian.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pencarian_universitas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pencarian_jurusan.js') }}"></script>
@endsection
