<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('unit');
            $table->string('curr');
            $table->float('harga_jual');
            $table->float('harga_beli');
            $table->string('disc');
            $table->integer('stok');
            $table->string('barcode');
            $table->string('status');
            $table->string('expired');
            $table->string('kategori');
            $table->text('ket');
            $table->text('image');
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
        Schema::dropIfExists('produk');
    }
}
