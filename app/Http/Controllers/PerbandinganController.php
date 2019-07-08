<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Master\Universitas;
use App\Model\View\DataUniversitas;

class PerbandinganController extends Controller
{
    public function index()
    {
        $id_universitas = request()->var_id_universitas;
        if(empty($id_universitas)){
            //PERBANDINGAN JURUSAN
            $data['tampilan'] = 'jurusan';
            $jurusan_univeritas = request()->var_id_jurusan;
            // $data['pvt_jenjang_jurusan_universitas'] = JenJurUniv::orderBy('id_universitas');
            foreach ($jurusan_univeritas as $key => $dt_jurusan_univeritas) {
                $var_jurusan_univeritas = explode('_',$dt_jurusan_univeritas);
                $id_jurusan = $var_jurusan_univeritas[0];
                $id_universitas = $var_jurusan_univeritas[1];
                $pvt_jenjang_jurusan_universitas = DataUniversitas::where('id_universitas', $id_universitas)
                ->where('id_jurusan', $id_jurusan)->first();
                $data['jenjuruniv'][] = [
                    "id_universitas" => $pvt_jenjang_jurusan_universitas->id_universitas,
                    "nama_universitas" => $pvt_jenjang_jurusan_universitas->nama_universitas,
                    "logo" => $pvt_jenjang_jurusan_universitas->logo,
                    "id_jurusan" => $pvt_jenjang_jurusan_universitas->id_jurusan,
                    "nama_jurusan" => $pvt_jenjang_jurusan_universitas->nama_jurusan,
                ];
            }
        }else{
            //PERBANDINGAN UNIVERSITAS
            $data['tampilan'] = 'universitas';
            $data['m_universitas'] = Universitas::whereIn('id_universitas', $id_universitas)->get();
        }
        return view('perbandingan.index', $data);
    }
}
