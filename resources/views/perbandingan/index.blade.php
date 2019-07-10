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
                            <h3>Detail Universitas</h3>
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
                            <h3>Jurusan</h3>
                        </div>
                        <div class="data-wrap">
                            <div class="row">
                                @forelse ($m_universitas as $key => $data_universitas)
                                    <div class="col-md div-{{$data_universitas->id_universitas}}">
                                        <div class="row">
                                            <div class="col-md">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Jenjang</th>
                                                            <th scope="col">Akreditasi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_universitas->jurusan()->orderBy('nama_jurusan')->get() as $key => $item)
                                                            <tr class="paginate-jurusan-{{$data_universitas->id_universitas}}">
                                                                <th scope="row">{{ $key+1 }}</th>
                                                                <td>{{ $item->nama_jurusan }}</td>
                                                                <td>{{ App\Model\Master\Jenjang::find($item->pivot->id_jenjang)->nama_jenjang }}</td>
                                                                <td>{{ $item->pivot->akreditasi_jurusan }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        @if ($data_universitas->jurusan()->count() > 5)
                                            <div class="row">
                                                <div class="col-md">
                                                    <div id="page-nav-jurusan-detail-{{ $data_universitas->id_universitas }}"></div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @empty
                                    Data jurusan tidak ditemukan
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="subhead">
                            <h3>Fasilitas</h3>
                        </div>
                        <div class="data-wrap">
                            <div class="row">
                                @foreach ($m_universitas as $key => $data_universitas)
                                    <div class="col-md div-{{$data_universitas->id_universitas}}">
                                        @foreach ($data_universitas->fasilitas as $key => $value)
                                            <div class="col-md my-2">
                                                <i class="fa fa-{{ $value->icon }}"></i>
                                                &nbsp;
                                                {{ $value->nama_fasilitas }}
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="subhead">
                            <h3>Tempat Umum Terdekat</h3>
                        </div>
                        <div class="data-wrap">
                            <div class="row">
                                @foreach ($m_universitas as $key => $data_universitas)
                                    <div class="col-md div-{{$data_universitas->id_universitas}}">
                                        @foreach ($data_universitas->tempat_umum as $key => $value)
                                            <div class="col-md my-2">
                                                <i class="fa fa-{{ $value->icon }}"></i>
                                                &nbsp;
                                                {{ $value->nama_tempat_umum }}
                                            </div>
                                        @endforeach
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
    <script type="text/javascript">

        var cookie_compare_id = $.parseJSON($.cookie('compare_univ_id'));
        for (var i = 0; i < cookie_compare_id.length; i++) {
            startPagination(cookie_compare_id[i]);
        }

        function startPagination(univ_id) {
            var pagePartsJurusan = $(".paginate-jurusan-" + univ_id);
            var numPagesJurusan = pagePartsJurusan.length;
            var perPageJurusan = 5;
            pagePartsJurusan.slice(perPageJurusan).hide();
            $("#page-nav-jurusan-detail-" + univ_id).pagination({
                items: numPagesJurusan,
                itemsOnPage: perPageJurusan,
                cssStyle: "light-theme",
                onPageClick: function (pageNum) {
                    var start = perPageJurusan * (pageNum - 1);
                    var end = start + perPageJurusan;
                    pagePartsJurusan.hide()
                    .slice(start, end).show();
                }
            });
        }
    </script>
@endsection
