<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasitokoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasitoko', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_instansi');
            $table->string('telp');
            $table->string('kode_pos');
            $table->string('deskripsi');
            $table->string('alamat');
            $table->string('image');
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
        Schema::dropIfExists('informasitoko');
    }
}
