<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolusipenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solusipenyakit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('penyakit_id');
            $table->timestamps();

            $table->foreign('penyakit_id')->references('id')->on('penyakit')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solusipenyakit');
    }
}
