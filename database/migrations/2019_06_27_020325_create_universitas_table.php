<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universitas', function (Blueprint $table) {
            $table->bigIncrements('id_universitas');
            $table->string('nama_universitas');
            $table->string('alamat_universitas');
            $table->integer('id_kecamatan');
            $table->integer('id_kota');
            $table->integer('id_provinsi');
            $table->string('telepon_universitas');
            $table->string('fax_universitas');
            $table->string('email_universitas');
            $table->string('website_universitas');
            $table->char('akreditasi_universitas',1);
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
        Schema::dropIfExists('universitas');
    }
}
