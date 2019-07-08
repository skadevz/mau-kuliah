<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Master\Universitas;
use App\Model\Master\Jurusan;
use App\Model\Master\Jenjang;
use App\Model\Master\Provinsi;
use App\Model\Master\Kota;
use App\Model\Master\Kecamatan;
use App\Model\Pivot\JenJurUniv;

class PencarianController extends Controller
{
    public function index(Request $request)
    {
        $universitas_tbl = new Universitas();
        $universitas_tbl_name = $universitas_tbl->getTable();
        $jurusan_tbl = new Jurusan();
        $jurusan_tbl_name = $jurusan_tbl->getTable();
        $jenjuruniv_tbl = new JenJurUniv();
        $jenjuruniv_tbl_name = $jenjuruniv_tbl->getTable();

        $data['no'] = 1;
        $data['value'] = $request->input('value');
        $data['lokasi_kampus'] = $request->input('lokasi_kampus');
        $data['tipe_kampus'] = $request->input('tipe_kampus');
        $data['akreditasi_kampus'] = $request->input('akreditasi_kampus');
        $data['sistem_perkuliahan'] = $request->input('sistem_perkuliahan');

        $data['m_lokasi'] = Provinsi::get();
        $data['m_universitas'] = Universitas::select($universitas_tbl_name . '.id_universitas', 'nama_universitas', 'alamat_universitas', 'akreditasi_universitas', 'logo')
                            ->join($jenjuruniv_tbl_name, $universitas_tbl_name . '.id_universitas', '=', $jenjuruniv_tbl_name . '.id_universitas')
                            ->join($jurusan_tbl_name, $jenjuruniv_tbl_name . '.id_jurusan', '=', $jurusan_tbl_name . '.id_jurusan');

        $data['m_jurusan'] = Jurusan::select($universitas_tbl_name . '.id_universitas', $jurusan_tbl_name . '.id_jurusan', 'nama_jurusan', 'akreditasi_jurusan', 'akreditasi_universitas', 'nama_universitas', 'logo')
                        ->join($jenjuruniv_tbl_name, $jurusan_tbl_name . '.id_jurusan', '=', $jenjuruniv_tbl_name . '.id_jurusan')
                        ->join($universitas_tbl_name, $jenjuruniv_tbl_name . '.id_universitas', '=', $universitas_tbl_name . '.id_universitas');

        if ($data['value'] != null) {
            $data['m_universitas'] = $data['m_universitas']->where(function ($query) use($universitas_tbl_name, $jurusan_tbl_name, $data) {
                $query->where($universitas_tbl_name . '.nama_universitas', 'ilike', '%' . $data['value'] . '%')
                        ->orWhere($universitas_tbl_name . '.nama_pendek', 'ilike', '%' . $data['value'] . '%')
                        ->orWhere($jurusan_tbl_name . '.tag', 'ilike', '%' . $data['value'] . '%')
                        ->orWhere($jurusan_tbl_name . '.nama_jurusan', 'ilike', '%' . $data['value'] . '%');
            });

            $data['m_jurusan'] = $data['m_jurusan']->where(function ($query) use($universitas_tbl_name, $jurusan_tbl_name, $data) {
                $query->where($universitas_tbl_name . '.nama_universitas', 'ilike', '%' . $data['value'] . '%')
                        ->orWhere($universitas_tbl_name . '.nama_pendek', 'ilike', '%' . $data['value'] . '%')
                        ->orWhere($jurusan_tbl_name . '.tag', 'ilike', '%' . $data['value'] . '%')
                        ->orWhere($jurusan_tbl_name . '.nama_jurusan', 'ilike', '%' . $data['value'] . '%');
            });
        }

        if ($data['lokasi_kampus'] != null && $data['lokasi_kampus'] != 'all') {
            $data['m_universitas'] = $data['m_universitas']->where($universitas_tbl_name . '.id_kota', $data['lokasi_kampus']);
            $data['m_jurusan'] = $data['m_jurusan']->where($universitas_tbl_name . '.id_kota', $data['lokasi_kampus']);
        }

        if ($data['tipe_kampus'] != null && $data['tipe_kampus'] != 'all') {
            $data['m_universitas'] = $data['m_universitas']->where($universitas_tbl_name . '.tipe_kampus', $data['tipe_kampus']);
            $data['m_jurusan'] = $data['m_jurusan']->where($universitas_tbl_name . '.tipe_kampus', $data['tipe_kampus']);
        }

        if ($data['akreditasi_kampus'] != null && $data['akreditasi_kampus'] != 'all') {
            $data['m_universitas'] = $data['m_universitas']->where($universitas_tbl_name . '.akreditasi_universitas', $data['akreditasi_kampus']);
            $data['m_jurusan'] = $data['m_jurusan']->where($universitas_tbl_name . '.akreditasi_universitas', $data['akreditasi_kampus']);
        }

        if ($data['sistem_perkuliahan'] != null  && $data['sistem_perkuliahan'] != 'all') {
            $data['m_universitas'] = $data['m_universitas']->where($universitas_tbl_name . '.sistem_perkuliahan', 'ilike', '%' . $data['sistem_perkuliahan'] . '%');
            $data['m_jurusan'] = $data['m_jurusan']->where($universitas_tbl_name . '.sistem_perkuliahan', 'ilike', '%' . $data['sistem_perkuliahan'] . '%');
        }

        $data['m_universitas'] = $data['m_universitas']->orderBy($universitas_tbl_name . '.akreditasi_universitas')
                        ->groupBy($universitas_tbl_name.'.id_universitas')
                        ->groupBy('nama_universitas')
                        ->groupBy('alamat_universitas')
                        ->groupBy('akreditasi_universitas')
                        ->groupBy('logo')->get();
        $data['m_jurusan'] = $data['m_jurusan']->orderBy($universitas_tbl_name . '.akreditasi_universitas')->get();

        // dd($data['m_jurusan']);

        return view('pencarian.index', $data);
    }
}
