<?php

use Illuminate\Database\Seeder;
use App\Model\Master\TempatUmum;

class TempatUmumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TempatUmum::create(['nama_tempat_umum' => 'Bandara', 'icon' => 'plane']);
        TempatUmum::create(['nama_tempat_umum' => 'Terminal Bus', 'icon' => 'bus']);
        TempatUmum::create(['nama_tempat_umum' => 'Cafe', 'icon' => 'coffee']);
        TempatUmum::create(['nama_tempat_umum' => 'Restaurant', 'icon' => 'glass']);
        TempatUmum::create(['nama_tempat_umum' => 'Mall', 'icon' => 'shopping-cart']);
        TempatUmum::create(['nama_tempat_umum' => 'Rumah Sakit', 'icon' => 'hospital-o']);
        TempatUmum::create(['nama_tempat_umum' => 'Apotek', 'icon' => 'stethoscope']);
        TempatUmum::create(['nama_tempat_umum' => 'Sport Center', 'icon' => 'soccer-ball-o']);
        TempatUmum::create(['nama_tempat_umum' => 'Stasiun', 'icon' => 'train']);
    }
}
