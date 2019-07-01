@extends('layouts.main')

@section('content')
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="search-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="infobox-container">
                        <div class="triangle-l"></div>
                        <div class="triangle-r"></div>
                        <div class="infobox">
                            <h3><span>Bandingkan Kampus</span></h3>
                            <p>
                                This is the content of the infobox.
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
@endsection
