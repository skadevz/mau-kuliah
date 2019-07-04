<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempatUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tempat_umum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_universitas');
            $table->string('nama_tempat_umum');
            $table->string('icon');
            $table->timestamps();

            $table->foreign('id_universitas')->references('id_universitas')->on('m_universitas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tempat_umum');
    }
}
