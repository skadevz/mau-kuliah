<?php

use Illuminate\Database\Seeder;
use App\Model\Master\UniversitasJurusan;

class UniversitasJurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UniversitasJurusan::create([
            'id_universitas' => 1,
            'id_jurusan' => 1,
            'id_jenjang' => 1,
            'akreditasi_jurusan' => 'A',
        ]);

        UniversitasJurusan::create([
            'id_universitas' => 1,
            'id_jurusan' => 2,
            'id_jenjang' => 1,
            'akreditasi_jurusan' => 'B',
        ]);

        UniversitasJurusan::create([
            'id_universitas' => 1,
            'id_jurusan' => 3,
            'id_jenjang' => 1,
            'akreditasi_jurusan' => 'A',
        ]);

        UniversitasJurusan::create([
            'id_universitas' => 2,
            'id_jurusan' => 3,
            'id_jenjang' => 1,
            'akreditasi_jurusan' => 'A',
        ]);

        UniversitasJurusan::create([
            'id_universitas' => 2,
            'id_jurusan' => 1,
            'id_jenjang' => 1,
            'akreditasi_jurusan' => 'B',
        ]);

        UniversitasJurusan::create([
            'id_universitas' => 3,
            'id_jurusan' => 1,
            'id_jenjang' => 1,
            'akreditasi_jurusan' => 'B',
        ]);

        UniversitasJurusan::create([
            'id_universitas' => 3,
            'id_jurusan' => 2,
            'id_jenjang' => 1,
            'akreditasi_jurusan' => 'B',
        ]);

        UniversitasJurusan::create([
            'id_universitas' => 3,
            'id_jurusan' => 4,
            'id_jenjang' => 1,
            'akreditasi_jurusan' => 'A',
        ]);
    }
}
