<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\View\DataUniversitas;
use App\Model\Master\Universitas;

class UniversitasController extends Controller
{
    public function index()
    {
        // $universitas = DataUniversitas::join('m_fasilitas', 'v_data_universitas.id_universitas');
        // $data['universitas'] = DataUniversitas::whereIdUniversitas(1)->first();

        // foreach ($universitas->fasilitas as $key => $value) {
        //     echo "$value<br>";
        // }

        // foreach ($data['universitas']->fasilitas as $key => $value) {
        //     echo $value."<br>";
        // }

        // dd($data);

        $data['universitas'] = DataUniversitas::first();
        dd($data);
        return view('universitas.index', $data);
    }
}
