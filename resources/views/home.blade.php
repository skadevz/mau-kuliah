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

<!--================ Kampus Terdekat =================-->
<section class="feature_area">
    <div class="container">
        <div class="section_tittle text-center">
            <h2>Kampus Dekat dengan Anda</h2>
        </div>
        <div class="row feature_inner">
            @foreach ($data_universitas as $item)
            <div class="col-lg-4 col-sm-6">
                <div class="feature_item">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 text-center">
                            <div class="f_icon">
                                <img src="{{ asset('assets/img/kampus/'.$item->logo) }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-9 content-kampus-terdekat">
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
                    <center><a href="#" class="btn_1">Lihat Review Kampus</a></center>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--================ End Kampus Terdekat =================-->


<!--================ Info Beasiswa =================-->
<section class="info_beasiswa_area">
    <div class="container">
        <div class="title__infobeasiswa clearfix">
            <h2 class="title__content">Info Beasiswa</h2>
        </div>
        <div class="row">
            @foreach ($data_universitas as $item)
            <div class="col-lg-3 col-sm-6">
                <a href="">
                    <div class="img-highlight" style="background-image:url({{ asset('assets/img/beasiswa/single_blog_1.png') }})"></div>
                    
                    <div class="text-slide">
                        <h4>{{$item->nama_universitas}}</h4>
                        <p>{{$item->alamat_universitas}} Mereka tidak mau sekadar mengeluh atau meluapkan amarah ketika menemui masalah di lingkungan sekitar. Memanfaatkan teknologi</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--================End Info Beasiswa =================-->


<!--================ Berita Kampus =================-->
<section class="berita_kampus_area">
    <div class="container">
        <div class="title__infobeasiswa clearfix">
            <h2 class="title__content">Berita Kampus</h2>
        </div>
        <div class="row">
            @foreach ($data_universitas as $item)
            <div class="col-lg-3 col-sm-6">
                <div class="single-blog-post service">
                    <div class="top-text">
                        <time class="icon">
                            <em>Wednesday</em>
                            <strong>September</strong>
                            <span>30</span>
                        </time>
                    </div>
                    <div class="img-highlight" style="background-image:url({{ asset('assets/img/beasiswa/single_blog_1.png') }})"></div>
                    <div class="text">
                        <h4>iOS Application Development with Swift</h4>
                        <p>
                            Lorem ipsum dolor sit amet consec tetur adipisicing elit,
                            sed do.
                        </p>
                        <a href="#" class="primary-btn">
                            Baca Selengkapnya
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--================End Berita Kampus =================-->
@endsection
