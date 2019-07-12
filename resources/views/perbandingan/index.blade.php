@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/compare.css') }}" />
@endsection
@section('content')
    <section class="banner_part_perbandingan">&nbsp;</section>
    <div id="header_back" class="container">
        {{-- <div class="subhead-back">
            <a href="javascript:void(0)" onclick="window.history.back()"> < Kembali ke Halaman Pencarian </a>
        </div> --}}
        <div class="btn-group go-to-compare" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-info" onclick="window.history.back()">
              <i class="fa fa-angle-double-left" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-light" onclick="window.history.back()">Kembali ke Halaman Pencarian</button>
        </div>
    </div>
    @include('perbandingan/'.$tampilan)
@endsection
@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/perbandingan.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/perbandingan_universitas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/perbandingan_jurusan.js') }}"></script>
@endsection
