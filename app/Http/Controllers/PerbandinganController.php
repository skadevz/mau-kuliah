<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Master\Universitas;

class PerbandinganController extends Controller
{
    public function index()
    {
        $id_universitas = request()->var_id_universitas;
        // $var_universitas_jurusan = explode('_',request()->var_id_jurusan);
        // $id_jurusan = $var_jurusan[0];
        // if(empty($id_universitas)) $id_universitas = $var_jurusan[1];

        // $data['v_universitas_jurusan'] = VUniversitasJurusan::where('id_universitas', $id_universitas)->orWhere('id_jurusan', $id_jurusan)->get();
        $data['v_universitas_jurusan'] = Universitas::whereIn('id_universitas', $id_universitas)->get();
        // dd($data);
        return view('perbandingan.index', $data);
    }
}
