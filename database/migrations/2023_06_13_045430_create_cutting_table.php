<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuttingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cutting', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_process_cutting');
            $table->unsignedBigInteger('id_worksheet');
            $table->unsignedBigInteger('id_warna');
            $table->unsignedBigInteger('id_ukuran');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('id_worksheet')->references('id')->on('worksheet')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_process_cutting')->references('id')->on('process_cutting')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_warna')->references('id')->on('warna')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_ukuran')->references('id')->on('ukuran')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cutting');
    }
}
