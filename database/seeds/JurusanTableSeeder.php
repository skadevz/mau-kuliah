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
            'tag' => 'informatika, teknik, software engineer, system, konsultan, database, programmer, developer, analyst'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Informatika',
            'tag' => 'informatika, teknik, software engineer, system, konsultan, database, programmer, developer, analyst'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Sistem Informasi',
            'tag' => 'sistem informasi, system, database specialist, technopreneur, developer, analyst, bisnis'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Sistem dan Teknologi Informasi',
            'tag' => 'sistem informasi, system, database specialist, technopreneur, developer, analyst, bisnis'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Oseanografi',
            'tag' => 'oseanografi, kelautan, militer, angkatan laut, perikanan, maritim'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Teknik Metalurgi',
            'tag' => 'metalurgi, teknik, pertambangan, logam, manufaktur, industri'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Akuntansi',
            'tag' => 'akuntan, manajemen, bisnis, perbankan, keuangan'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Desain Interior',
            'tag' => 'desain interior, konsultan desain, kontraktor, pameran'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Desain Komunikasi Visual',
            'tag' => 'ilustrator, illustrator, grafis, desainer, animator'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Astronomi',
            'tag' => 'langit, planet, sains, analis'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Fisika',
            'tag' => 'industri, manufaktur, audit, analis, riset, pendidikan, statistik'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Matematika',
            'tag' => 'statistik, analis, riset, pendidikan, industri, teknologi'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Kedokteran',
            'tag' => 'dokter, peneliti, farmasi, kesehatan'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Manajemen',
            'tag' => 'entrepreneur, manajemen, bisnis, wirausaha, konsultan, keuangan'
        ]);
    }
}
