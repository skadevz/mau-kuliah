<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvtJenjangJurusanUniversitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvt_jenjang_jurusan_universitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_jenjang');
            $table->unsignedInteger('id_jurusan');
            $table->unsignedInteger('id_universitas');
            // $table->char('akreditasi_jurusan', 1);
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
        Schema::dropIfExists('pvt_jenjang_jurusan_universitas');
    }
}
