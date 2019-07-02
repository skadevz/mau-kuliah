<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Master\Provinsi;
use App\Model\Master\Kota;
use App\Model\Master\Kecamatan;

class LocationController extends Controller
{
    public function get_cities($province_id)
    {
        $kota = Kota::where('id_provinsi', $province_id)->get();
        return response()->json($kota);
    }

    public function get_districts($city_id)
    {
        $kecamatan = Kecamatan::where('id_kota', $city_id)->get();
        return response()->json($kecamatan);
    }
}
