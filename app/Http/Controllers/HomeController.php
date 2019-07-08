<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Master\Universitas;
use App\Model\Master\Kota;

class HomeController extends Controller
{
    public function index() {
        $data['data_universitas'] = Universitas::join('m_kota', 'm_universitas.id_kota', '=', 'm_kota.id_kota')->where('m_kota.nama', 'ilike', '%'.getLocation().'%')->get()->take(6);

        return view('home',$data);
    }

}
