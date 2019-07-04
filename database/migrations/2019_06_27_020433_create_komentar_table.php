<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_komentar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_universitas');
            $table->string('nama');
            $table->text('komentar');
            $table->integer('rating');
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
        Schema::dropIfExists('tbl_komentar');
    }
}
