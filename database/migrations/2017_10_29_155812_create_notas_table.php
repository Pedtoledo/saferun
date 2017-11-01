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
             $table->integer('caronista_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('nota');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('carona_id')->references('id')->on('caronas');
            $table->foreign('caronista_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
