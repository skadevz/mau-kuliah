<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeringkatUniversitasController extends Controller
{
    public function index()
    {
        return view('peringkat_universitas.index');
    }
}
