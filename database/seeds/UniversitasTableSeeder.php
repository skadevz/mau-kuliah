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
            'nama_universitas' => 'Universitas Bina Nusantara',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jl. Airlangga No. 4 - 6, Airlangga, Gubeng, Jawa Timur 60115',
            'id_kecamatan' => '1101010',
            'id_kota' => '1101',
            'id_provinsi' => '11',
            'logo' => 'binus.png'
        ]);

        Universitas::create([
            'nama_universitas' => 'Institut Teknologi Sepuluh November',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Kampus ITS Sukolilo, Jawa Timur 60111',
            'id_kecamatan' => '1101010',
            'id_kota' => '1101',
            'id_provinsi' => '11',
            'logo' => 'its.png'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Telkom',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jl. Raya Darmaga Kampus IPB Darmaga, Jawa Barat 16680',
            'id_kecamatan' => '1101010',
            'id_kota' => '1101',
            'id_provinsi' => '11',
            'logo' => 'tu.png'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Indonesia',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jl. Ganesha 10, Jawa Barat 40132',
            'id_kecamatan' => '1101010',
            'id_kota' => '1101',
            'id_provinsi' => '11',
            'logo' => 'ui.png'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Airlangga',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jl. Ganesha 10, Jawa Barat 40132',
            'id_kecamatan' => '1101010',
            'id_kota' => '1101',
            'id_provinsi' => '11',
            'logo' => 'unair.png'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Negeri Medan',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jl. Ganesha 10, Jawa Barat 40132',
            'id_kecamatan' => '1101010',
            'id_kota' => '1101',
            'id_provinsi' => '11',
            'logo' => 'unimed.png'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Negeri Semarang',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jl. Ganesha 10, Jawa Barat 40132',
            'id_kecamatan' => '1101010',
            'id_kota' => '1101',
            'id_provinsi' => '11',
            'logo' => 'unnes.png'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Brawijaya',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jl. Ganesha 10, Jawa Barat 40132',
            'id_kecamatan' => '1101010',
            'id_kota' => '1101',
            'id_provinsi' => '11',
            'logo' => 'unbraw.png'
        ]);

        Universitas::create([
            'nama_universitas' => 'Institut Teknologi Bandung',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Kampus ITS Sukolilo, Jawa Timur 60111',
            'id_kecamatan' => '1101010',
            'id_kota' => '1101',
            'id_provinsi' => '11',
            'logo' => 'itb.png'
        ]);
    }
}
