@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/compare.css') }}" />
@endsection
@section('content')
    <section class="banner_part_perbandingan">&nbsp;</section>
    <div id="header_back" class="container">
        <div class="subhead-back">
            <a href="javascript:void(0)" onclick="window.history.back()"> < Kembali ke Halaman Pencarian </a>
        </div>
    </div>
    @include('perbandingan/'.$tampilan)
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('assets/js/perbandingan.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/perbandingan_universitas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/perbandingan_jurusan.js') }}"></script>
@endsection
