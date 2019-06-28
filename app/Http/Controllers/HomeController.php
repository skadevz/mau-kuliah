<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Master\Universitas;

class HomeController extends Controller
{
    public function index() {
        $data['data_universitas'] = Universitas::get();
        return view('home',$data);
    }
}
