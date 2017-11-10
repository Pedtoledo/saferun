<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('notas', function (Blueprint $table) {
            $table->primary(['carona_id', 'user_id']);
            $table->integer('carona_id')->unsigned();
  $table->foreign('carona_id')->references('id')->on('caronas')
              ->onDelete('cascade');

             $table->integer('caronista_id')->unsigned();
               $table->foreign('caronista_id')->references('id')->on('users')
              ->onDelete('cascade');

            $table->integer('user_id')->unsigned();
              $table->foreign('user_id')->references('id')->on('users')
              ->onDelete('cascade');
          
            $table->integer('nota');

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
       
            
    }
}
