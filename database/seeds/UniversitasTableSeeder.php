<?php

use Illuminate\Database\Seeder;
use App\Model\Master\Universitas;

class UniversitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Universitas::create([
            'id_universitas' => 1,
            'nama_universitas' => 'Universitas Bina Nusantara',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Alamat',
            'id_kecamatan' => '1101010',
            'id_kota' => '1101',
            'id_provinsi' => '11'
        ]);

        Universitas::create([
            'id_universitas' => 2,
            'nama_universitas' => 'Universitas Indonesia',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Alamat',
            'id_kecamatan' => '1101010',
            'id_kota' => '1101',
            'id_provinsi' => '11'
        ]);
    }
}
