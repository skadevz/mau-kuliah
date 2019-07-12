<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblBiayaKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_biaya_kuliah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_universitas');
            $table->unsignedInteger('id_jurusan');
            $table->unsignedInteger('id_jenjang');
            $table->string('nama');
            $table->string('keterangan')->nullable();
            $table->integer('biaya');
            $table->string('jenis_pembayaran');
            $table->string('url_detail')->nullable();
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
        Schema::dropIfExists('tbl_biaya_kuliah');
    }
}
