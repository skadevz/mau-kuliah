@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/compare.css') }}" />
@endsection

@section('content')
        <section id="section_perbandingan" style="margin-top: 10em; margin-bottom: 4em;">
            <div class="container">
                <div class="row">
                    <div class="col-md list-block">
                        <div class="list-img">
                            <img src="{{ asset('assets/img/kampus/' . $universitas->logo) }}">
                        </div>
                        <div class="list-info">
                            <div class="title">{{ $universitas->nama_universitas }}</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="subhead">
                            <h3>Detail Universitas</h3>
                        </div>
                        <div class="data-wrap">
                            <div class="row">
                                <div class="list-compare-item col-md">
                                    {{-- <ul>
                                        <li>{{ $universitas->alamat_universitas }}</li>
                                    </ul> --}}
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Nama</div>
                                            <div class="col-md">{{ $universitas->nama_universitas }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Akreditasi</div>
                                            <div class="col-md">{{ $universitas->akreditasi_universitas }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Alamat</div>
                                            <div class="col-md">{{ $universitas->alamat_universitas }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Telepon</div>
                                            <div class="col-md">{{ $universitas->telepon_universitas ?: 'N/A' }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Fax</div>
                                            <div class="col-md">{{ $universitas->fax_universitas ?: 'N/A' }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-compare-item col-md">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Email</div>
                                            <div class="col-md">{{ $universitas->email_universitas ?: 'N/A' }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Website</div>
                                            <div class="col-md">{{ $universitas->website_universitas ?: 'N/A' }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Tanggal Berdiri</div>
                                            <div class="col-md">{{ $universitas->tanggal_berdiri ?: 'N/A' }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> No. SK</div>
                                            <div class="col-md">{{ $universitas->nomor_sk ?: 'N/A' }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Tanggal SK</div>
                                            <div class="col-md">{{ $universitas->tanggal_sk ?: 'N/A' }}</div>
                                        </div>
                                    </div>
                                    {{-- <ul>
                                        <li>{{ $universitas->alamat_universitas }}</li>
                                    </ul> --}}
                                </div>
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
                                <div class="col-md">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jenjang</th>
                                                <th scope="col">Akreditasi</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($universitas->jurusan()->orderBy('nama_jurusan')->get() as $key => $item)
                                                <tr class="paginate-jurusan">
                                                    <th scope="row">{{ $key+1 }}</th>
                                                    <td>{{ $item->nama_jurusan }}</td>
                                                    <td>{{ App\Model\Master\Jenjang::find($item->pivot->id_jenjang)->nama_jenjang }}</td>
                                                    <td>{{ App\Model\DetailJurusan::where('id_universitas', $item->pivot->id_universitas)->where('id_jurusan', $item->pivot->id_jurusan)->where('id_jenjang', $item->pivot->id_jenjang)->first()->akreditasi_jurusan }}</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#exampleModal" onclick="getDetailJurusan({{ $item->pivot->id_universitas }}, {{ $item->id_jurusan }}, {{ $item->pivot->id_jenjang }})">Detail</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @if ($universitas->jurusan()->count() > 5)
                                        <div class="row">
                                            <div class="col-md">
                                                <div id="page-nav-jurusan-detail"></div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
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
                                @foreach ($universitas->fasilitas as $key => $item)
                                    <div class="list-compare-item col-md">
                                        <i class="fa fa-{{ $item->icon }}"></i>
                                        &nbsp;
                                        {{ $item->nama_fasilitas }}
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
                                @foreach ($universitas->tempat_umum as $key => $item)
                                    <div class="list-compare-item col-md">
                                        <i class="fa fa-{{ $item->icon }}"></i>
                                        &nbsp;
                                        {{ $item->nama_tempat_umum }}
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
                                @for ($i = 0; $i < 4; $i++)
                                <div class="col-lg-3 col-sm-6">
                                    <a href="">
                                        <div class="img-highlight" style="background-image:url({{ asset('assets/img/beasiswa/single_blog_1.png') }})"></div>
                                        <div class="text-slide">
                                            <h4>Enthusiastically predominate standardized content without.</h4>
                                            <p>Mereka tidak mau sekadar mengeluh atau meluapkan amarah ketika menemui masalah di lingkungan sekitar</p>
                                        </div>
                                    </a>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Detail Jurusan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-md" style="font-weight: bold;">
                                    Nama Universitas
                                </div>
                                <div class="col-md" id="detail-nama-universitas">
                                    -
                                </div>

                                <div class="col-md" style="font-weight: bold;">
                                    Telepon Jurusan
                                </div>
                                <div class="col-md" id="detail-telepon-jurusan">
                                    -
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md" style="font-weight: bold;">
                                    Nama Jurusan
                                </div>
                                <div class="col-md" id="detail-nama-jurusan">
                                    -
                                </div>

                                <div class="col-md" style="font-weight: bold;">
                                    Fax Jurusan
                                </div>
                                <div class="col-md" id="detail-fax-jurusan">
                                    -
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md" style="font-weight: bold;">
                                    Jenjang
                                </div>
                                <div class="col-md" id="detail-jenjang">
                                    -
                                </div>

                                <div class="col-md" style="font-weight: bold;">
                                    Email Jurusan
                                </div>
                                <div class="col-md" id="detail-email-jurusan">
                                    -
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md" style="font-weight: bold;">
                                    Akreditas Jurusan
                                </div>
                                <div class="col-md" id="detail-akreditasi-jurusan">
                                    -
                                </div>

                                <div class="col-md" style="font-weight: bold;">
                                    Website Jurusan
                                </div>
                                <div class="col-md" id="detail-website-jurusan">
                                    -
                                </div>
                            </div>
                            <hr>
                            <div class="row my-2">
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col-md">
                                            <h4>
                                                Profil Jurusan
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md" id="profil-jurusan">
                                            -
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row my-2">
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col-md">
                                            <h4>
                                                Biaya Perkuliahan
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <table class="table">
                                                <tbody>
                                                    <table class="table" id="table-detail-biaya">
                                                        <tbody>
                                                            @for ($i=0; $i < 5; $i++)
                                                                <tr>
                                                                    <th>BPT</th>
                                                                    <td>Rp{{ number_format(rand(10000000, 99999999)) }}</td>
                                                                </tr>
                                                            @endfor
                                                        </tbody>
                                                    </table>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/perbandingan.js') }}"></script>
<script type="text/javascript">
    var pagePartsJurusan = $(".paginate-jurusan");
    var numPagesJurusan = pagePartsJurusan.length;
    var perPageJurusan = 5;
    pagePartsJurusan.slice(perPageJurusan).hide();
    $("#page-nav-jurusan-detail").pagination({
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
</script>
@endsection
