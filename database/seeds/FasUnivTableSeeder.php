<?php

use Illuminate\Database\Seeder;
use App\Model\Pivot\FasilitasUniversitas;

class FasUnivTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_universitas = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        for ($i=0; $i < count($id_universitas); $i++) {
            for ($j=0; $j < 5; $j++) {
                FasilitasUniversitas::create(['id_fasilitas' => rand(1, 9), 'id_universitas' => $id_universitas[$i]]);
            }
        }
    }
}
