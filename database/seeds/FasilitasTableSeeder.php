<?php

use Illuminate\Database\Seeder;
use App\Model\Master\Fasilitas;

class FasilitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fasilitas::create(['nama_fasilitas' => 'Asrama', 'icon' => 'building']);
        Fasilitas::create(['nama_fasilitas' => 'Internet', 'icon' => 'wifi']);
        Fasilitas::create(['nama_fasilitas' => 'Bus Kampus', 'icon' => 'bus']);
        Fasilitas::create(['nama_fasilitas' => 'Asuransi', 'icon' => 'medkit']);
        Fasilitas::create(['nama_fasilitas' => 'Gedung Pertemuan', 'icon' => 'bank']);
        Fasilitas::create(['nama_fasilitas' => 'Perpustakaan', 'icon' => 'bank']);
        Fasilitas::create(['nama_fasilitas' => 'Tempat Ibadah', 'icon' => 'building']);
        Fasilitas::create(['nama_fasilitas' => 'Laboratorium', 'icon' => 'flask']);
        Fasilitas::create(['nama_fasilitas' => 'Fasilitas Olahraga', 'icon' => 'soccer-ball-o']);
    }
}
