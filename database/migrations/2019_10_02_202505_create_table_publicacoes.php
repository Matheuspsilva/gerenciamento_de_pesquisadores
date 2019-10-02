<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePublicacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pesquisador_id');
            $table->string('titulo');
            $table->string('periodico');
            $table->string('issn');
            $table->string('ano');
            $table->timestamps();

            $table->foreign('pesquisador_id')->references('id')->on('pesquisadores');

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacoes');
    }
}
