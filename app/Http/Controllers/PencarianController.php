<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Master\Universitas;
use App\Model\Master\Jurusan;
use App\Model\Master\Jenjang;
use App\Model\Master\UniversitasJurusan;
use App\Model\Master\Provinsi;
use App\Model\Master\Kota;
use App\Model\Master\Kecamatan;

class PencarianController extends Controller
{
    public function index(Request $request)
    {
        $universitas_tbl = new Universitas();
        $universitas_tbl_name = $universitas_tbl->getTable();
        $jurusan_tbl = new Jurusan();
        $jurusan_tbl_name = $jurusan_tbl->getTable();
        $universitas_jurusan_tbl = new UniversitasJurusan();
        $universitas_jurusan_tbl_name = $universitas_jurusan_tbl->getTable();

        $value = $request->input('value');
        $lokasi_kampus = $request->input('lokasi_kampus');
        $tipe_kampus = $request->input('tipe_kampus');
        $akreditasi_kampus = $request->input('akreditasi_kampus');

        $data['m_lokasi'] = Kota::get();
        $data['universitas'] = Universitas::select($universitas_tbl_name . '.id_universitas', 'nama_universitas', 'alamat_universitas', 'akreditasi_universitas', 'logo')
                            ->join($universitas_jurusan_tbl_name, $universitas_tbl_name . '.id_universitas', '=', $universitas_jurusan_tbl_name . '.id_universitas')
                            ->join($jurusan_tbl_name, $universitas_jurusan_tbl_name . '.id_jurusan', '=', $jurusan_tbl_name . '.id_jurusan')
                            ->where($jurusan_tbl_name . '.tag', 'like', '%' . $value . '%');

        $data['jurusan'] = Jurusan::select($universitas_tbl_name . '.id_universitas', $jurusan_tbl_name . '.id_jurusan', 'nama_jurusan', 'nama_universitas', 'logo')
                        ->join($universitas_jurusan_tbl_name, $jurusan_tbl_name . '.id_jurusan', '=', $universitas_jurusan_tbl_name . '.id_jurusan')
                        ->join($universitas_tbl_name, $universitas_jurusan_tbl_name . '.id_universitas', '=', $universitas_tbl_name . '.id_universitas')
                        ->where($jurusan_tbl_name . '.tag', 'like', '%' . $value . '%');

        if ($lokasi_kampus != null) {
            $data['universitas'] = $data['universitas']->where($universitas_tbl_name . '.id_kota', $lokasi_kampus);
            $data['jurusan'] = $data['jurusan']->where($universitas_tbl_name . '.id_kota', $lokasi_kampus);
        }

        if ($tipe_kampus != null) {
            $data['universitas'] = $data['universitas']->where($universitas_tbl_name . '.tipe_kampus', $lokasi_kampus);
            $data['jurusan'] = $data['jurusan']->where($universitas_tbl_name . '.tipe_kampus', $lokasi_kampus);
        }

        if ($akreditasi_kampus != null) {
            $data['universitas'] = $data['universitas']->where($universitas_tbl_name . '.akreditasi_universitas', $lokasi_kampus);
            $data['jurusan'] = $data['jurusan']->where($universitas_tbl_name . '.akreditasi_universitas', $lokasi_kampus);
        }

        $data['universitas'] = $data['universitas']->orderBy($universitas_tbl_name . '.akreditasi_universitas')
                        ->groupBy($universitas_tbl_name.'.id_universitas')
                        ->groupBy('nama_universitas')
                        ->groupBy('alamat_universitas')
                        ->groupBy('akreditasi_universitas')
                        ->groupBy('logo')->get();
        $data['jurusan'] = $data['jurusan']->orderBy($universitas_tbl_name . '.akreditasi_universitas')->get();

        return view('pencarian.index', $data);
    }
}
