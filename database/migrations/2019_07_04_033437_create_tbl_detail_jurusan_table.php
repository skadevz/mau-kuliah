<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDetailJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_detail_jurusan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_universitas');
            $table->unsignedInteger('id_jurusan');
            $table->unsignedInteger('id_jenjang');
            $table->char('akreditasi_jurusan', 1);
            $table->text('profil')->nullable();
            $table->integer('daya_tampung')->nullable();
            $table->integer('jumlah_peminat')->nullable();
            $table->string('telepon_jurusan')->nullable();
            $table->string('fax_jurusan')->nullable();
            $table->string('email_jurusan')->nullable();
            $table->string('website_jurusan')->nullable();
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
        Schema::dropIfExists('tbl_detail_jurusan');
    }
}
