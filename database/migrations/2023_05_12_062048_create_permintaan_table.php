<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->date('target_delivery'); 
            $table->integer('jumlah');
            $table->unsignedBigInteger('id_jenis_produk');
            $table->unsignedBigInteger('id_kategori'); 
            $table->unsignedBigInteger('id_sub_kategori');     
            $table->timestamps();

            $table->foreign('id_jenis_produk')->references('id')->on('jenis_produk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_kategori')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_sub_kategori')->references('id')->on('sub_kategori')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan');
    }
}
