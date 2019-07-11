<section id="section_perbandingan">
    <div class="container">
        <div id="fly-name" class="fly-name">
            <div class="data-wrap">
                <div class="row">
                    @foreach ($jenjuruniv as $key => $value)
                        <div class="list-compare-item col-md div-{{$value->id_jurusan.'_'.$value->id_universitas}}">
                            <span class="icon remove-compare-jurusan list-block-del" data-id="{{$value->id_jurusan.'_'.$value->id_universitas}}"></span>
                            <div class="kampus-name">
                                <table style="height: 100%">
                                    <tbody>
                                        <tr>
                                            <td class="list-img" align="center" valign="middle">
                                                <img src="{{asset('assets/img/kampus/' . $value->logo)}}" alt="{{$value->nama_universitas}}" scale="0">
                                            </td>
                                        </tr>
                                        <tr class="list-info">
                                            <td align="center" class="title" valign="middle"><span>{{$value->nama_universitas}}</span></td>
                                        </tr>
                                        <tr class="list-info">
                                            <td align="center" class="title" valign="middle"><span>{{$value->nama_jenjang." - ".$value->nama_jurusan}}</span></td>
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
                <div class="col-md list-block div-{{$value->id_jurusan.'_'.$value->id_universitas}}">
                    <span class="icon remove-compare-jurusan list-block-del" data-id="{{$value->id_jurusan.'_'.$value->id_universitas}}"></span>
                    <div class="list-img">
                        <img src="{{asset('assets/img/kampus/'. $value->logo)}}">
                    </div>
                    <div class="list-info">
                        <div class="title">{{$value->nama_universitas}}</div>
                        <div class="sub-title">{{$value->nama_jenjang." - ".$value->nama_jurusan}}</div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="subhead">
                    <h3>Detail Jurusan</h3>
                </div>
                <div class="data-wrap p-3">
                    <div class="row">
                        @foreach ($jenjuruniv as $key => $value)
                            <div class="col-md div-{{$value->id_jurusan.'_'.$value->id_universitas}}">
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Nama Universitas</div>
                                    <div class="col-md">{{ $value->nama_universitas }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Nama Jurusan</div>
                                    <div class="col-md">{{ $value->nama_jurusan }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Akreditas Jurusan</div>
                                    <div class="col-md">{{ $value->akreditasi_jurusan }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Jenjang</div>
                                    <div class="col-md">{{ $value->nama_jenjang }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Telepon</div>
                                    <div class="col-md">{{ $value->telepon_jurusan ?: 'N/A' }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Fax</div>
                                    <div class="col-md">{{ $value->fax_jurusan ?: 'N/A' }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Email</div>
                                    <div class="col-md">{{ $value->email_jurusan ?: 'N/A' }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 my-1" style="font-weight: bold;"><i class="fa fa-bolt"></i> Website</div>
                                    <div class="col-md">{{ $value->website_jurusan ?: 'N/A' }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="subhead">
                    <h3>Profil Jurusan</h3>
                </div>
                <div class="data-wrap p-3">
                    <div class="row">
                        @foreach ($jenjuruniv as $key => $value)
                            <div class="col-md div-{{$value->id_jurusan.'_'.$value->id_universitas}}">
                                <div>
                                    {{ $value->profil ? substr($value->profil, 0, 255) . '..' : 'N/A' }}
                                </div>
                                <center>
                                    <button type="button" class="btn_1 btn_selengkapnya" name="button">Lihat Selengkapnya</button>
                                </center>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="subhead">
                    <h3>Tingkat Persaingan</h3>
                </div>
                <div class="data-wrap p-3">
                    <div class="row">
                        @foreach ($jenjuruniv as $key => $value)
                            <div class="col-md div-{{$value->id_jurusan.'_'.$value->id_universitas}}">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="row">
                                            <div class="col-md">
                                                <span style="font-weight: bold;">Peminat:</span>
                                                <span class="akreditasi">{{ $value->jumlah_peminat }}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <span style="font-weight: bold;">Daya Tampung:</span>
                                                <span class="akreditasi">{{ $value->daya_tampung }}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <span style="font-weight: bold;">Persentase Keberhasilan:</span>
                                                <span class="akreditasi">{{ number_format(($value->daya_tampung / $value->jumlah_peminat) * 100, 2) }}%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="subhead">
                    <h3>Biaya Perkuliahan</h3>
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
