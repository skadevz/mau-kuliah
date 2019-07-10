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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($universitas->jurusan()->orderBy('nama_jurusan')->get() as $key => $item)
                                                <tr class="paginate-jurusan">
                                                    <th scope="row">{{ $key+1 }}</th>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                                            {{ $item->nama_jurusan }}
                                                        </a>
                                                    </td>
                                                    <td>{{ App\Model\Master\Jenjang::find($item->pivot->id_jenjang)->nama_jenjang }}</td>
                                                    <td>{{ $item->pivot->akreditasi_jurusan }}</td>
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
                                {{-- @foreach ($m_universitas as $key => $data_universitas) --}}
                                    {{-- <div class="list-compare-item col-md div-{{$data_universitas->id_universitas}}"> --}}
                                        {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. --}}
                                    {{-- </div> --}}
                                {{-- @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Detail Jurusan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=0; $i < 10; $i++)
                                    <tr>
                                        <th scope="row">{{ $i + 1 }}</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('js')
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
