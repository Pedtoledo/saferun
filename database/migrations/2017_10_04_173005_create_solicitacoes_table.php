<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Solicitacoes', function (Blueprint $table) {
               $table->increments('id');
              $table->integer('usuario_id')->unsigned();
              $table->foreign('usuario_id')->references('id')->on('users')
                ->onDelete('cascade');
              $table->integer('carona_id')->unsigned();
              $table->foreign('carona_id')->references('id')->on('caronas')
                ->onDelete('cascade'); 
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
         Schema::dropIfExists('Solicitacoes');
    }
}