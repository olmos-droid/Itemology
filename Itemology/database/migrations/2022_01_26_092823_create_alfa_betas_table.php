<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;
use Illuminate\Support\Facades\Schema;

class CreateAlfaBetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alfa_betas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alfa_id');
            $table->unsignedBigInteger('beta_id');

            $table->foreign('alfa_id')->references('id')->on('alfas')->onDelete('cascade');
            $table->foreign('beta_id')->references('id')->on('betas')->onDelete('cascade');
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
        Schema::dropIfExists('alfa_betas');
    }
}
