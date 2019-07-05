<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerbandinganController extends Controller
{
    public function index()
    {
        $id_universitas = request()->var_id_universitas;
        $id_jurusan = request()->var_id_jurusan;
        return view('perbandingan.index');
    }
}
