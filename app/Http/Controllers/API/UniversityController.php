<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Master\Universitas;
use App\Model\Master\Jurusan;
use App\Model\Master\Jenjang;
use App\Model\View\DataUniversitas;
use App\Model\Pivot\JenJurUniv;
use App\Model\DetailJurusan;
use App\Model\BiayaKuliah;

class UniversityController extends Controller
{
    public function get_major_detail($univ_id, $maj_id, $deg_id)
    {
        $jenjuruniv_tbl = new JenJurUniv();
        $jenjuruniv_tbl_name = $jenjuruniv_tbl->getTable();
        $universitas_tbl = new Universitas();
        $universitas_tbl_name = $universitas_tbl->getTable();
        $jurusan_tbl = new Jurusan();
        $jurusan_tbl_name = $jurusan_tbl->getTable();
        $jenjang_tbl = new Jenjang();
        $jenjang_tbl_name = $jenjang_tbl->getTable();
        $detail_jurusan_tbl = new DetailJurusan();
        $detail_jurusan_tbl_name = $detail_jurusan_tbl->getTable();

        $data['jurusan'] = DetailJurusan::select(
                                        $jenjuruniv_tbl_name . ".id_universitas",
                                        $jenjuruniv_tbl_name . ".id_jurusan",
                                        $jenjuruniv_tbl_name . ".id_jenjang",
                                        $universitas_tbl_name . ".nama_universitas",
                                        $jurusan_tbl_name . ".nama_jurusan",
                                        $jenjang_tbl_name . ".nama_jenjang",
                                        $detail_jurusan_tbl_name . ".akreditasi_jurusan",
                                        $detail_jurusan_tbl_name . ".telepon_jurusan",
                                        $detail_jurusan_tbl_name . ".fax_jurusan",
                                        $detail_jurusan_tbl_name . ".email_jurusan",
                                        $detail_jurusan_tbl_name . ".website_jurusan",
                                        $detail_jurusan_tbl_name . ".profil",
                                        $detail_jurusan_tbl_name . ".jumlah_peminat",
                                        $detail_jurusan_tbl_name . ".daya_tampung"
                                    )
                                    ->leftJoin($jenjuruniv_tbl_name, function ($join) use ($detail_jurusan_tbl_name, $jenjuruniv_tbl_name) {
                                        $join->on($detail_jurusan_tbl_name . '.id_universitas', '=', $jenjuruniv_tbl_name . '.id_universitas')
                                            ->on($detail_jurusan_tbl_name . '.id_jurusan', '=', $jenjuruniv_tbl_name . '.id_jurusan')
                                            ->on($detail_jurusan_tbl_name . '.id_jenjang', '=', $jenjuruniv_tbl_name . '.id_jenjang');
                                    })
                                    ->leftJoin($universitas_tbl_name, $jenjuruniv_tbl_name . '.id_universitas', '=', $universitas_tbl_name . '.id_universitas')
                                    ->leftJoin($jurusan_tbl_name, $jenjuruniv_tbl_name . '.id_jurusan', '=', $jurusan_tbl_name . '.id_jurusan')
                                    ->leftJoin($jenjang_tbl_name, $jenjuruniv_tbl_name . '.id_jenjang', '=', $jenjang_tbl_name . '.id_jenjang')
                                    ->where($jenjuruniv_tbl_name . '.id_universitas', $univ_id)
                                    ->where($jenjuruniv_tbl_name . '.id_jurusan', $maj_id)
                                    ->where($jenjuruniv_tbl_name . '.id_jenjang', $deg_id)
                                    ->first();
        $data['biaya_kuliah'] = BiayaKuliah::where('id_universitas', $univ_id)
                                            ->where('id_jurusan', $maj_id)
                                            ->where('id_jenjang', $deg_id)
                                            ->get();
        return response()->json($data);
    }
}
