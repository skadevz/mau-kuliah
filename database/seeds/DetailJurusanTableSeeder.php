<?php

use Illuminate\Database\Seeder;
use App\Model\DetailJurusan;

class DetailJurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 2,
            'id_universitas' => 9,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 6,
            'id_jurusan' => 10,
            'id_universitas' => 9,
            'akreditasi_jurusan' => '-',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 6,
            'id_jurusan' => 11,
            'id_universitas' => 9,
            'akreditasi_jurusan' => 'C',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 4,
            'id_universitas' => 9,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 5,
            'id_universitas' => 9,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 6,
            'id_universitas' => 9,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 8,
            'id_universitas' => 9,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 9,
            'id_universitas' => 9,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 10,
            'id_universitas' => 9,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 11,
            'id_universitas' => 9,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 12,
            'id_universitas' => 9,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 14,
            'id_universitas' => 9,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITB Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 3,
            'id_universitas' => 4,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UI Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 6,
            'id_universitas' => 4,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UI Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 7,
            'id_universitas' => 4,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UI Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 11,
            'id_universitas' => 4,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UI Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 12,
            'id_universitas' => 4,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UI Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 13,
            'id_universitas' => 4,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UI Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 14,
            'id_universitas' => 4,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UI Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 1,
            'id_universitas' => 1,
            'akreditasi_jurusan' => 'A',
            'profil' => 'BINUS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 3,
            'id_universitas' => 1,
            'akreditasi_jurusan' => 'A',
            'profil' => 'BINUS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 7,
            'id_universitas' => 1,
            'akreditasi_jurusan' => 'A',
            'profil' => 'BINUS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 8,
            'id_universitas' => 1,
            'akreditasi_jurusan' => 'B',
            'profil' => 'BINUS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 9,
            'id_universitas' => 1,
            'akreditasi_jurusan' => 'B',
            'profil' => 'BINUS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 12,
            'id_universitas' => 1,
            'akreditasi_jurusan' => 'B',
            'profil' => 'BINUS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 14,
            'id_universitas' => 1,
            'akreditasi_jurusan' => 'A',
            'profil' => 'BINUS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 8,
            'id_universitas' => 2,
            'akreditasi_jurusan' => 'B',
            'profil' => 'ITS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 11,
            'id_universitas' => 2,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 12,
            'id_universitas' => 2,
            'akreditasi_jurusan' => 'B',
            'profil' => 'ITS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 3,
            'id_universitas' => 2,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 1,
            'id_universitas' => 2,
            'akreditasi_jurusan' => 'A',
            'profil' => 'ITS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 7,
            'id_universitas' => 3,
            'akreditasi_jurusan' => '-',
            'profil' => 'TELU Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 8,
            'id_universitas' => 3,
            'akreditasi_jurusan' => '-',
            'profil' => 'TELU Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 9,
            'id_universitas' => 3,
            'akreditasi_jurusan' => '-',
            'profil' => 'TELU Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 14,
            'id_universitas' => 3,
            'akreditasi_jurusan' => '-',
            'profil' => 'TELU Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 3,
            'id_universitas' => 3,
            'akreditasi_jurusan' => '-',
            'profil' => 'TELU Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 1,
            'id_universitas' => 3,
            'akreditasi_jurusan' => 'A',
            'profil' => 'TELU Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 7,
            'id_universitas' => 5,
            'akreditasi_jurusan' => '-',
            'profil' => 'UNAIR Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 11,
            'id_universitas' => 5,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UNAIR Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 12,
            'id_universitas' => 5,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UNAIR Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 14,
            'id_universitas' => 5,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UNAIR Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 3,
            'id_universitas' => 5,
            'akreditasi_jurusan' => 'B',
            'profil' => 'UNAIR Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 7,
            'id_universitas' => 6,
            'akreditasi_jurusan' => 'B',
            'profil' => 'UNIMED Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 11,
            'id_universitas' => 6,
            'akreditasi_jurusan' => 'B',
            'profil' => 'UNIMED Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 12,
            'id_universitas' => 6,
            'akreditasi_jurusan' => 'B',
            'profil' => 'UNIMED Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 14,
            'id_universitas' => 6,
            'akreditasi_jurusan' => 'B',
            'profil' => 'UNIMED Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 7,
            'id_universitas' => 7,
            'akreditasi_jurusan' => 'B',
            'profil' => 'UNNES Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 11,
            'id_universitas' => 7,
            'akreditasi_jurusan' => 'B',
            'profil' => 'UNNES Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 12,
            'id_universitas' => 7,
            'akreditasi_jurusan' => 'B',
            'profil' => 'UNNES Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 14,
            'id_universitas' => 7,
            'akreditasi_jurusan' => 'B',
            'profil' => 'UNNES Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 1,
            'id_universitas' => 7,
            'akreditasi_jurusan' => 'C',
            'profil' => 'UNNES Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 7,
            'id_universitas' => 8,
            'akreditasi_jurusan' => 'B',
            'profil' => 'UNIBRAW Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 11,
            'id_universitas' => 8,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UNIBRAW Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 13,
            'id_universitas' => 8,
            'akreditasi_jurusan' => '-',
            'profil' => 'UNIBRAW Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 12,
            'id_universitas' => 8,
            'akreditasi_jurusan' => '-',
            'profil' => 'UNIBRAW Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 14,
            'id_universitas' => 8,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UNIBRAW Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 3,
            'id_universitas' => 8,
            'akreditasi_jurusan' => 'A',
            'profil' => 'UNIBRAW Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);

        DetailJurusan::create([
            'id_jenjang' => 5,
            'id_jurusan' => 1,
            'id_universitas' => 8,
            'akreditasi_jurusan' => '-',
            'profil' => 'UNIBRAW Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'daya_tampung' => rand(pow(10, 2), pow(10, 3) - 1),
            'jumlah_peminat' => rand(pow(10, 3), pow(10, 4) - 1),
            'telepon_jurusan' => rand(pow(10, 9), pow(10, 10) - 1),
            'fax_jurusan' => '',
            'email_jurusan' => '',
            'website_jurusan' => '',
        ]);
    }
}
