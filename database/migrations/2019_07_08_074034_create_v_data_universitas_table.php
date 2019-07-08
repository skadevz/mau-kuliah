<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVDataUniversitasTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        DB::statement("
        CREATE VIEW v_data_universitas
        AS
        SELECT mu.nama_universitas,
        mu.akreditasi_universitas,
        mu.alamat_universitas AS telepon_universitas,
        mu.fax_universitas,
        mu.email_universitas,
        mu.website_universitas,
        mu.tanggal_berdiri,
        mu.nomor_sk,
        mu.tangal_sk,
        mu.logo,
        mu.tipe_kampus,
        mu.sistem_perkuliahan,
        mj.nama_jurusan,
        pjju.akreditasi_jurusan,
        mje.nama_jenjang
        FROM m_universitas mu
        JOIN pvt_jenjang_jurusan_universitas pjju ON mu.id_universitas =
        pjju.id_universitas
        JOIN m_jurusan mj ON pjju.id_jurusan = mj.id_jurusan
        JOIN m_jenjang mje ON pjju.id_jenjang = mje.id_jenjang
        ORDER BY mu.nama_universitas
        ");
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        DB::statement("drop view v_data_universitas");
    }
}
