<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMUniversitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_universitas', function (Blueprint $table) {
            $table->bigIncrements('id_universitas');
            $table->string('nama_universitas');
            $table->string('nama_pendek')->nullable();
            $table->string('slug');
            $table->char('akreditasi_universitas', 1);
            $table->string('alamat_universitas');
            $table->integer('id_kecamatan');
            $table->char('id_kota', 4);
            $table->integer('id_provinsi');
            $table->string('telepon_universitas')->nullable();
            $table->string('fax_universitas')->nullable();
            $table->string('email_universitas')->nullable();
            $table->string('website_universitas')->nullable();
            $table->string('tanggal_berdiri')->nullable();
            $table->string('nomor_sk')->nullable();
            $table->string('tangal_sk')->nullable();
            $table->string('logo')->default('default_kampus.png')->nullable();
            $table->string('tipe_kampus')->nullable();
            $table->string('sistem_perkuliahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_universitas');
    }
}
