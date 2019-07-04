<?php

use Illuminate\Database\Seeder;
use App\Model\Master\Jurusan;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'nama_jurusan' => 'Teknik Informatika',
            'tag' => 'programmer, programming, developer, analyst'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Sistem Informasi',
            'tag' => 'programmer, programming, developer, analyst, bisnis'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Sistem Komputer',
            'tag' => 'hardware, arduino, sistem operasi'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Akuntansi',
            'tag' => 'akuntan, manajemen, bisnis'
        ]);
    }
}
