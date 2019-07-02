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
        Jenjang::create(['nama_jenjang' => 'D1']);
        Jenjang::create(['nama_jenjang' => 'D2']);
        Jenjang::create(['nama_jenjang' => 'D3']);
        Jenjang::create(['nama_jenjang' => 'D4']);
        Jenjang::create(['nama_jenjang' => 'S1']);
        Jenjang::create(['nama_jenjang' => 'S2']);
        Jenjang::create(['nama_jenjang' => 'S3']);
    }
}
