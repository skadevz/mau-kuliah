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
            <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Universitas"><i class="fa fa-plus"></i></a>
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
                @for ($i=0; $i < 10; $i++)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>Universitas A</td>
                        <td>alamat lams sda</td>
                        <td>dolor</td>
                        <td>
                            <a class="btn btn-success" href="#"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endfor
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
