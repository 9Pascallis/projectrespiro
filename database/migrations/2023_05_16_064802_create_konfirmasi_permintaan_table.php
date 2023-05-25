<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonfirmasiPermintaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfirmasi_permintaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_permintaan');
            $table->enum('status',['accept','decline']);
            $table->timestamps();

            $table->foreign('id_permintaan')->references('id')->on('permintaan')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfirmasi_permintaan');
    }
}
