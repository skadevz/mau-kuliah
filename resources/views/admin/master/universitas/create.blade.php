@extends('layouts.admin_main')

@section('css_script')

@endsection

@section('page_name')
    Universitas
@endsection

@section('content')
    <div class="row">
        <div class="col-sm">
            <h2>Tambah Universitas</h2>
        </div>
        <div class="col-sm text-right">
            <a href="{{ route('universitas.index') }}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm mb-4">
            <div class="table-responsive">
                <form action="{{ route('universitas.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Universitas</label>
                        <input type="text" class="form-control" name="nama_universitas">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat Universitas</label>
                        <textarea class="form-control" rows="3" name="alamat_universitas"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Akreditasi Universitas</label>
                        <select class="form-control" name="akreditasi_universitas">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Provinsi</label>
                        <select class="form-control" name="id_provinsi" id="id_provinsi">
                            <option disabled selected>Pilih Provinsi</option>
                            @foreach ($m_provinsi as $provinsi)
                                <option value="{{ $provinsi->id_provinsi }}">{{ $provinsi->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <select class="form-control" name="id_kota" id="id_kota">
                            <option disabled selected>Pilih Kota</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <select class="form-control" name="id_kecamatan" id="id_kecamatan">
                            <option disabled selected>Pilih Kecamatan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js_script')
    <script type="text/javascript">
        $('#id_provinsi').change(function (a, b) {
            let id_provinsi = $('#id_provinsi option:selected').val();
            let api_url = window.location.origin + '/api/location/get-cities/' + id_provinsi;
            $.ajax({
                method: 'GET',
                url: api_url,
                data: [],
                success: function (data) {
                    $('#id_kota').empty().append('<option disabled selected>Pilih Kota</option>');
                    $('#id_kecamatan').empty().append('<option disabled selected>Pilih Kecamatan</option>')
                    $.each(data, function (i, value) {
                        $('#id_kota').append($('<option>').text(value.nama).attr('value', value.id_kota));
                    });
                },
                error: function (exception) {
                    console.log('Something wrong!');
                    console.log(exception);
                }
            });
        });

        $('#id_kota').change(function () {
            let id_kota = $('#id_kota option:selected').val();
            let api_url = window.location.origin + '/api/location/get-districts/' + id_kota;
            $.ajax({
                method: 'GET',
                url: api_url,
                data: [],
                success: function (data) {
                    $('#id_kecamatan').empty().append('<option disabled selected>Pilih Kecamatan</option>');
                    $.each(data, function (i, value) {
                        $('#id_kecamatan').append($('<option>').text(value.nama).attr('value', value.id_kecamatan));
                    });
                },
                error: function (exception) {
                    console.log('Something wrong!');
                    console.log(exception);
                }
            });
        });
    </script>
@endsection
