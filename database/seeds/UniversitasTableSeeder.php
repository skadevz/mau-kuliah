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
            'nama_pendek' => 'BINUS',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jl KH Syahdan No 9 Palmerah 11480 D.K.I. Jakarta',
            'id_kecamatan' => '3174030',
            'id_kota' => '3174',
            'id_provinsi' => '31',
            'logo' => 'binus.png',
            'tipe_kampus' => 'swasta',
            'sistem_perkuliahan' => '1, 2'
        ]);

        Universitas::create([
            'nama_universitas' => 'Institut Teknologi Sepuluh November',
            'nama_pendek' => 'ITS',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Kampus ITS Sukolilo, Jawa Timur 60111',
            'id_kecamatan' => '3578080',
            'id_kota' => '3578',
            'id_provinsi' => '35',
            'logo' => 'its.png',
            'tipe_kampus' => 'negeri',
            'sistem_perkuliahan' => '1'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Telkom',
            'nama_pendek' => 'TELU',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jl. Telekomunikasi Terusan Buah Batu Bandung 40257',
            'id_kecamatan' => '3273090',
            'id_kota' => '3273',
            'id_provinsi' => '32',
            'logo' => 'tu.png',
            'tipe_kampus' => 'swasta',
            'sistem_perkuliahan' => '1'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Indonesia',
            'nama_pendek' => 'UI',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Pd. Cina, Beji, Jawa Barat 16424',
            'id_kecamatan' => '3276050',
            'id_kota' => '3276',
            'id_provinsi' => '32',
            'logo' => 'ui.png',
            'tipe_kampus' => 'negeri',
            'sistem_perkuliahan' => '1'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Airlangga',
            'nama_pendek' => 'UNAIR',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jl. Airlangga No. 4 - 6, Airlangga, Gubeng, Jawa Timur 60115',
            'id_kecamatan' => '3578100',
            'id_kota' => '3578',
            'id_provinsi' => '35',
            'logo' => 'unair.png',
            'tipe_kampus' => 'negeri',
            'sistem_perkuliahan' => '1'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Negeri Medan',
            'nama_pendek' => 'UNIMED',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jalan Willem Iskandar Pasar V Medan Estate Sumatera Utara 20221',
            'id_kecamatan' => '1275170',
            'id_kota' => '1275',
            'id_provinsi' => '12',
            'logo' => 'unimed.png',
            'tipe_kampus' => 'negeri',
            'sistem_perkuliahan' => '1'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Negeri Semarang',
            'nama_pendek' => 'UNNES',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Gedung H Kampus Sekaran Gunungpati Semarang 50229',
            'id_kecamatan' => '3374020',
            'id_kota' => '3374',
            'id_provinsi' => '33',
            'logo' => 'unnes.png',
            'tipe_kampus' => 'negeri',
            'sistem_perkuliahan' => '1'
        ]);

        Universitas::create([
            'nama_universitas' => 'Universitas Brawijaya',
            'nama_pendek' => 'UNBRAW',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jalan Veteran Kec. Lowokwaru, Kota Malang, Jawa Timur',
            'id_kecamatan' => '3573050',
            'id_kota' => '3573',
            'id_provinsi' => '35',
            'logo' => 'unbraw.png',
            'tipe_kampus' => 'negeri',
            'sistem_perkuliahan' => '1'
        ]);

        Universitas::create([
            'nama_universitas' => 'Institut Teknologi Bandung',
            'nama_pendek' => 'ITB',
            'akreditasi_universitas' => 'A',
            'alamat_universitas' => 'Jl. Ganesha 10, Jawa Barat 40132',
            'id_kecamatan' => '3273230',
            'id_kota' => '3273',
            'id_provinsi' => '32',
            'logo' => 'itb.png',
            'tipe_kampus' => 'negeri',
            'sistem_perkuliahan' => '1'
        ]);
    }
}
