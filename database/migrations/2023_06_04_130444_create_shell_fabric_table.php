<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShellFabricTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shell_fabric', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_worksheet');
            $table->string('kode');
            $table->string('description');
            $table->string('unit');
            $table->float('cons');
            $table->string('color');
            $table->float('qty');
            $table->string('remarks');


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
        Schema::dropIfExists('shell_fabric');
    }
}
