<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\View\DataUniversitas;
use App\Model\Master\Universitas;

class UniversitasController extends Controller
{
    public function index($slug)
    {
        $data['universitas'] = Universitas::where('slug', $slug)->firstOrFail();
        return view('universitas.index', $data);
    }
}
