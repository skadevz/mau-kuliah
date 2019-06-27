<?php

use Illuminate\Database\Seeder;
use App\Model\Master\Jenjang;

class JenjangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenjang::create(['id_jenjang' => '1', 'nama_jenjang' => 'D1']);
        Jenjang::create(['id_jenjang' => '2', 'nama_jenjang' => 'D2']);
        Jenjang::create(['id_jenjang' => '3', 'nama_jenjang' => 'D3']);
        Jenjang::create(['id_jenjang' => '4', 'nama_jenjang' => 'D4']);
        Jenjang::create(['id_jenjang' => '5', 'nama_jenjang' => 'S1']);
        Jenjang::create(['id_jenjang' => '6', 'nama_jenjang' => 'S2']);
        Jenjang::create(['id_jenjang' => '7', 'nama_jenjang' => 'S3']);
    }
}
