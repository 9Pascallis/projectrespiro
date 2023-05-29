<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_plan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_konfirmasi_permintaan');
            $table->unsignedBigInteger('id_allocation');     
            $table->integer('jumlah');
            $table->string('HPP');
            $table->string('CMT');
            $table->date('preparation_mulai');
            $table->date('preparation_selesai');
            $table->date('ppm');
            $table->date('cutting_mulai');
            $table->date('cutting_selesai');
            $table->date('sewing_mulai');
            $table->date('sewing_selesai');
            $table->date('finishing_mulai');
            $table->date('finishing_selesai');
            $table->date('packing_mulai');
            $table->date('packing_selesai');
            $table->date('closing_mulai');
            $table->date('closing_selesai');
            $table->timestamps();

            $table->foreign('id_allocation')->references('id')->on('allocation')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_konfirmasi_permintaan')->references('id')->on('permintaan')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('production_plan');
    }
}
