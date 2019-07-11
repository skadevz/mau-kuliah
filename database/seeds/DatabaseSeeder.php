<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UniversitasTableSeeder::class);
        $this->call(JurusanTableSeeder::class);
        $this->call(JenjangTableSeeder::class);
        $this->call(FasilitasTableSeeder::class);
        $this->call(TempatUmumTableSeeder::class);

        $this->call(DetailJurusanTableSeeder::class);
        $this->call(BiayaKuliahTableSeeder::class);

        $this->call(JenJurUnivTableSeeder::class);
        $this->call(FasUnivTableSeeder::class);
        $this->call(TemUUnivTableSeeder::class);
    }
}
