<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Master\Universitas;

class PencarianController extends Controller
{
    public function index()
    {
        $data['no'] = 1;
        $data['data_universitas'] = Universitas::orderBy('akreditasi_universitas')->get();
        return view('pencarian.index', $data);
    }
}
