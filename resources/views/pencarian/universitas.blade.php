<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="infobox-container">
        <div class="triangle-l"></div>
        <div class="triangle-r"></div>
        <div class="infobox-universitas">
            <h3><span>Bandingkan Kampus</span></h3>
            <p class="mt-4">
                @forelse ($m_universitas as $data_universitas)
                    <div class="card shadow paginate-universitas univ-list">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-xs-12 col-sm-12  text-center">
                                    <div class="f_icon univ-list-logo">
                                        <img src="{{ asset('assets/img/kampus/' . $data_universitas->logo) }}">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-12 col-xs-12 col-sm-12 content-kampus">
                                    <a href="{{ route('universitas.index', ['slug' => $data_universitas->slug]) }}">
                                        <h4 class="nama-universitas">{{ $data_universitas->nama_universitas }}</h4>
                                    </a>
                                    <span class="alamat-universitas">
                                        <i class="fa fa-map-marker"></i> {{ $data_universitas->alamat_universitas }}
                                    </span>
                                    <p>
                                        Akreditasi : <span class="akreditasi">{{$data_universitas->akreditasi_universitas}}</span>
                                    </p>
                                    <hr>
                                    <div class="custom-control custom-checkbox tombol-checkbox">
                                        <div class="fixer-container">
                                            <input style="cursor: pointer;" type="checkbox" class="custom-control-input box-compare-universitas" value="{{$data_universitas->id_universitas}}" id="customCheck-{{$data_universitas->id_universitas}}">
                                            <label style="cursor: pointer;" class="custom-control-label" for="customCheck-{{$data_universitas->id_universitas}}">Bandingkan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{$no++}}
                @empty
                    Data universitas tidak ditemukan
                @endforelse
                @if (count($m_universitas) > 6)
                    <div id="page-nav-universitas"></div>
                @endif
            </p>
        </div>
    </div>
</div>
