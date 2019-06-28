@extends('layouts.main')
@section('content')
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <!--<h5>Every child yearns to learn</h5>-->
                        <h1>Our Advance Educator Learning System</h1>
                        <p>
                            Fifth saying upon divide divide rule for deep their female all hath
                            brind mid Days and beast greater grass signs abundantly have greater also use
                            over face earth days years under brought moveth she star
                        </p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================Feature Area =================-->
<section class="feature_area gray_bg">
    <div class="container">
        <div class="section_tittle text-center">
            <h2>Kampus Dekat dengan Anda</h2>
        </div>
        <div class="row feature_inner">
            @foreach ($data_universitas as $item)
            <div class="col-lg-4 col-sm-6">
                <div class="feature_item">
                    <div class="row">
                        <div class="col-lg-4 col-md-3">
                            <div class="f_icon">
                                <img src="{{ asset('assets/img/kampus/'.$item->logo) }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-9">
                            <h4>{{$item->nama_universitas}}</h4>
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{$item->alamat_universitas}}
                            </p>
                            <p>
                                Akreditasi : <span class="akreditasi">{{$item->akreditasi_universitas}}</span>
                            </p>
                        </div>
                    </div>
                    <br />
                    <a href="#" class="btn_1">Lihat Review Kampus</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--================End Feature Area =================-->
@endsection
