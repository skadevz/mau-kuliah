<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Master\Universitas;
use App\Model\Master\Kota;

class HomeController extends Controller
{
    public function index() {
        // $ip = request()->ip();
        $ip = '116.206.40.86';
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', "https://ipapi.co/$ip/json");

        $location = json_decode($response->getBody());

        $data['data_universitas'] = Universitas::join('m_kota', 'm_universitas.id_kota', '=', 'm_kota.id_kota')->where('m_kota.nama', 'ilike', '%'.$location->city.'%')->get()->take(6);

        return view('home',$data);
    }

}
