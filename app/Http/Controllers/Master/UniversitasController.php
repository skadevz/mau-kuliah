<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Master\Universitas;
use App\Model\Master\Provinsi;
use App\Model\Master\Kota;
use App\Model\Master\Kecamatan;

class UniversitasController extends Controller
{
    public function index()
    {
        $data['no'] = 1;
        $data['m_universitas'] = Universitas::paginate(10);
        return view('admin.master.universitas.index', $data);
    }

    public function create()
    {
        $data['m_provinsi'] = Provinsi::get();
        $data['m_kota'] = Kota::get();
        $data['m_kecamatan'] = Kecamatan::get();
        return view('admin.master.universitas.create', $data);
    }

    public function store(Request $request)
    {
        $nama_universitas = $request->input('nama_universitas');
        $akreditasi_universitas = $request->input('akreditasi_universitas');
        $alamat_universitas = $request->input('alamat_universitas');
        $id_kecamatan = $request->input('id_kecamatan');
        $id_kota = $request->input('id_kota');
        $id_provinsi = $request->input('id_provinsi');

        $universitas = new Universitas();
        $universitas->nama_universitas = $nama_universitas;
        $universitas->akreditasi_universitas = $akreditasi_universitas;
        $universitas->alamat_universitas = $alamat_universitas;
        $universitas->id_kecamatan = $id_kecamatan;
        $universitas->id_kota = $id_kota;
        $universitas->id_provinsi = $id_provinsi;
        $universitas->save();

        alert()->success('Universitas berhasil ditambahkan', 'Universitas')->persistent('Tutup');
        return redirect()->route('universitas.index');
    }

    public function edit($id)
    {
        $data['universitas'] = Universitas::findOrFail($id);
        $data['m_provinsi'] = Provinsi::get();
        $data['m_kota'] = Kota::where('id_provinsi', $data['universitas']->id_provinsi)->get();
        $data['m_kecamatan'] = Kecamatan::where('id_kota', $data['universitas']->id_kota)->get();
        return view('admin.master.universitas.edit', $data);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $nama_universitas = $request->input('nama_universitas');
        $akreditasi_universitas = $request->input('akreditasi_universitas');
        $alamat_universitas = $request->input('alamat_universitas');
        $id_kecamatan = $request->input('id_kecamatan');
        $id_kota = $request->input('id_kota');
        $id_provinsi = $request->input('id_provinsi');

        $universitas = Universitas::findOrFail($id);
        $universitas->nama_universitas = $nama_universitas;
        $universitas->akreditasi_universitas = $akreditasi_universitas;
        $universitas->alamat_universitas = $alamat_universitas;
        $universitas->id_kecamatan = $id_kecamatan;
        $universitas->id_kota = $id_kota;
        $universitas->id_provinsi = $id_provinsi;
        $universitas->save();

        alert()->success('Universitas berhasil diubah', 'Universitas')->persistent('Tutup');
        return redirect()->route('universitas.index');
    }

    public function delete($id)
    {
        $universitas = Universitas::findOrFail($id);
        $universitas->delete();

        alert()->success('Universitas berhasil dihapus', 'Universitas')->persistent('Tutup');
        return redirect()->route('universitas.index');
    }
}
