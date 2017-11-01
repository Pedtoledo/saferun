<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaronasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caronas', function (Blueprint $table) {
            $table->increments('id');
               $table->string('nome');
               $table->integer('usuario_id')->unsigned();
               $table->foreign('usuario_id')->references('id')->on('users')
                ->onDelete('cascade');
                $table->string('image');
            $table->string('descricao');
                 $table->string('chegada');
                    $table->string('saida');
                  $table->string('hrsaida');
                    $table->string('hrchegada');
                      $table->string('datasaida');
                        $table->string('datachegada');
           
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
        Schema::dropIfExists('caronas');
    }
}
