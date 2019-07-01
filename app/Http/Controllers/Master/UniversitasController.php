<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Master\Universitas;

class UniversitasController extends Controller
{
    public function index()
    {
        return view('admin.master.universitas.index');
    }

    public function create()
    {
        // code...
    }

    public function store(Request $request)
    {
        // code...
    }

    public function edit($id)
    {
        // code...
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        // code...
    }

    public function delete($id)
    {
        // code...
    }
}
