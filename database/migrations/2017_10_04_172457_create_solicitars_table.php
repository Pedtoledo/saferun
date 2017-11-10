<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitars', function (Blueprint $table) {
            
              $table->increments('id');  
              
              $table->integer('user_id')->unsigned();
              $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
              $table->integer('carona_id')->unsigned();
              $table->foreign('carona_id')->references('id')->on('caronas')
                ->onDelete('cascade'); 
              $table->integer('caronista_id');
              $table->unique(['user_id', 'carona_id']);
              $table->string('status')->nullable();
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
         Schema::dropIfExists('solicitars');
    }
}
