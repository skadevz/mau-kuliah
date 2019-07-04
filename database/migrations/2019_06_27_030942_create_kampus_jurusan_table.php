<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKampusJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kampus_jurusan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_universitas');
            $table->integer('id_jurusan');
            $table->integer('id_jenjang');
            $table->char('akreditasi_jurusan', 1);
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
        Schema::dropIfExists('tbl_kampus_jurusan');
    }
}
