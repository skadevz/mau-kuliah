<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Master\Universitas;
use App\Model\View\DataUniversitas;
use App\Model\DetailJurusan;

class PerbandinganController extends Controller
{
    public function index()
    {
        $data_universitas_tbl = new DataUniversitas();
        $data_universitas_tbl_name = $data_universitas_tbl->getTable();
        $detail_jurusan_tbl = new DetailJurusan();
        $detail_jurusan_tbl_name = $detail_jurusan_tbl->getTable();

        $id_universitas = json_decode($_COOKIE['compare_univ_id']);

        if(empty($id_universitas)){
            //PERBANDINGAN JURUSAN
            $data['tampilan'] = 'jurusan';
            $jurusan_univeritas = json_decode($_COOKIE['compare_jurusan_id']);
            foreach ($jurusan_univeritas as $key => $dt_jurusan_univeritas) {
                $var_jurusan_univeritas = explode('_',$dt_jurusan_univeritas);
                $id_jurusan = $var_jurusan_univeritas[0];
                $id_universitas = $var_jurusan_univeritas[1];
                $data_jurusan = DataUniversitas::select(
                                                            $data_universitas_tbl_name.".id_universitas",
                                                            $data_universitas_tbl_name.".nama_universitas",
                                                            $data_universitas_tbl_name.".logo",
                                                            $data_universitas_tbl_name.".id_jurusan",
                                                            $data_universitas_tbl_name.".nama_jurusan",
                                                            $detail_jurusan_tbl_name.".akreditasi_jurusan",
                                                            $data_universitas_tbl_name.".nama_jenjang",
                                                            "profil",
                                                            "telepon_jurusan",
                                                            "fax_jurusan",
                                                            "email_jurusan",
                                                            "website_jurusan",
                                                            "daya_tampung",
                                                            "jumlah_peminat"
                                                        )
                                ->leftJoin($detail_jurusan_tbl_name, function ($join) use($data_universitas_tbl_name, $detail_jurusan_tbl_name) {
                                    $join->on($data_universitas_tbl_name . '.id_universitas', '=', $detail_jurusan_tbl_name . '.id_universitas')
                                        ->on($data_universitas_tbl_name . '.id_jurusan', '=', $detail_jurusan_tbl_name . '.id_jurusan')
                                        ->on($data_universitas_tbl_name . '.id_jenjang', '=', $detail_jurusan_tbl_name . '.id_jenjang');
                                })
                                ->where($data_universitas_tbl_name . '.id_universitas', $id_universitas)
                                ->where($data_universitas_tbl_name . '.id_jurusan', $id_jurusan)->first();
                $data['jenjuruniv'][] = $data_jurusan;
            }
        }else{
            //PERBANDINGAN UNIVERSITAS
            $data['tampilan'] = 'universitas';
            $data['m_universitas'] = Universitas::whereIn('id_universitas', $id_universitas)->get();
        }
        return view('perbandingan.index', $data);
    }
}
