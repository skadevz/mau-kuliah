@extends('layouts.admin_main')

@section('page_name')
    Universitas
@endsection

@section('content')
    <div class="row">
        <div class="col-sm">
            <h2>Daftar Universitas</h2>
        </div>
        <div class="col-sm text-right">
            <a href="{{ route('universitas.create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Universitas"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <div class="row">

    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Logo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($m_universitas as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nama_universitas }}</td>
                        <td>{{ $item->alamat_universitas }}</td>
                        <td><img src="{{ asset('assets/img/kampus') . '/' . $item->logo }}" height="32"></td>
                        <td>
                            <a class="btn btn-success" href="{{ route('universitas.edit', ['id' => $item->id_universitas]) }}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger" href="{{ route('universitas.delete', ['id' => $item->id_universitas]) }}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
