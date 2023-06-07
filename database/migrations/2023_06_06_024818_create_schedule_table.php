<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_worksheet');
            $table->date('ppm')->nullable();
            $table->date('cutting_mulai')->nullable();
            $table->date('cutting_selesai')->nullable();
            $table->date('sewing_mulai')->nullable();
            $table->date('sewing_selesai')->nullable();
            $table->timestamps();

            $table->foreign('id_worksheet')->references('id')->on('worksheet')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
