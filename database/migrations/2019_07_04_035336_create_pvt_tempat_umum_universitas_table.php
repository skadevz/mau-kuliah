<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvtTempatUmumUniversitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvt_tempat_umum_universitas', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->unsignedInteger('id_tempat_umum');
            $table->unsignedInteger('id_universitas');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pvt_tempat_umum_universitas');
    }
}
