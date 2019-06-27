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
        Schema::create('m_universitas', function (Blueprint $table) {
            $table->bigIncrements('id_universitas');
            $table->string('nama_universitas');
            $table->char('akreditasi_universitas',1);
            $table->string('alamat_universitas');
            $table->integer('id_kecamatan');
            $table->integer('id_kota');
            $table->integer('id_provinsi');
            $table->string('telepon_universitas')->nullable();
            $table->string('fax_universitas')->nullable();
            $table->string('email_universitas')->nullable();
            $table->string('website_universitas')->nullable();
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
