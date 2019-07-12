<section id="section_perbandingan">
    <div class="container">
        <div id="fly-name" class="fly-name fly-name-universitas">
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
                <div class="data-wrap p-3">
                    <div class="row">
                        @foreach ($m_universitas as $key => $data_universitas)
                            <div class="col-md div-{{$data_universitas->id_universitas}}">
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Nama</div>
                                    <div class="col-md">{{ $data_universitas->nama_universitas }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Akreditasi</div>
                                    <div class="col-md">{{ $data_universitas->akreditasi_universitas }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Alamat</div>
                                    <div class="col-md">{{ $data_universitas->alamat_universitas }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Telepon</div>
                                    <div class="col-md">{{ $data_universitas->telepon_universitas ?: 'N/A' }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Fax</div>
                                    <div class="col-md">{{ $data_universitas->fax_universitas ?: 'N/A' }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Email</div>
                                    <div class="col-md">{{ $data_universitas->email_universitas ?: 'N/A' }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Website</div>
                                    <div class="col-md">{{ $data_universitas->website_universitas ?: 'N/A' }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Tanggal Berdiri</div>
                                    <div class="col-md">{{ $data_universitas->tanggal_berdiri ?: 'N/A' }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> No. SK</div>
                                    <div class="col-md">{{ $data_universitas->nomor_sk ?: 'N/A' }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Tanggal SK</div>
                                    <div class="col-md">{{ $data_universitas->tanggal_sk ?: 'N/A' }}</div>
                                </div>
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
                <div class="data-wrap p-3">
                    <div class="row">
                        @foreach ($m_universitas as $key => $data_universitas)
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
                                                @forelse ($data_universitas->jurusan()->orderBy('nama_jurusan')->get() as $key => $item)
                                                    <tr class="paginate-jurusan-{{$data_universitas->id_universitas}}">
                                                        <th scope="row">{{ $key+1 }}</th>
                                                        <td>
                                                            <a href="#" data-toggle="modal" data-target="#exampleModal" onclick="getDetailJurusan({{ $item->pivot->id_universitas }}, {{ $item->id_jurusan }}, {{ $item->pivot->id_jenjang }})">
                                                                {{ $item->nama_jurusan }}
                                                            </a>
                                                        </td>
                                                        <td>{{ App\Model\Master\Jenjang::find($item->pivot->id_jenjang)->nama_jenjang }}</td>
                                                        <td>{{ App\Model\DetailJurusan::where('id_universitas', $item->pivot->id_universitas)->where('id_jurusan', $item->pivot->id_jurusan)->where('id_jenjang', $item->pivot->id_jenjang)->first()->akreditasi_jurusan }}</td>
                                                    </tr>
                                                @empty
                                                    Data jurusan tidak ditemukan
                                                @endforelse
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="subhead">
                    <h3>Fasilitas</h3>
                </div>
                <div class="data-wrap p-3">
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
                <div class="data-wrap p-3">
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
    <div class="modal-dialog modal-dialog-centered" role="document">
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
                    </div>
                    <div class="row my-2">
                        <div class="col-md" style="font-weight: bold;">
                            Nama Jurusan
                        </div>
                        <div class="col-md" id="detail-nama-jurusan">
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
                    </div>
                    <div class="row my-2">
                        <div class="col-md" style="font-weight: bold;">
                            Akreditas Jurusan
                        </div>
                        <div class="col-md" id="detail-akreditasi-jurusan">
                            -
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md" style="font-weight: bold;">
                            Telepon Jurusan
                        </div>
                        <div class="col-md" id="detail-telepon-jurusan">
                            -
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md" style="font-weight: bold;">
                            Fax Jurusan
                        </div>
                        <div class="col-md" id="detail-fax-jurusan">
                            -
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md" style="font-weight: bold;">
                            Email Jurusan
                        </div>
                        <div class="col-md" id="detail-email-jurusan">
                            -
                        </div>
                    </div>
                    <div class="row mt-2">
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
