<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worksheet', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_production_plan');
            $table->integer('nomor_ws');
            $table->string('nama_brand');
            $table->string('nama_buyer');
            $table->longText('notes');

            

            $table->timestamps();

            $table->foreign('id_production_plan')->references('id')->on('production_plan')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worksheet');
    }
}
