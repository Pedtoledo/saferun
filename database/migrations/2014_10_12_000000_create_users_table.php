<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('sobrenome');
            $table->string('telefone');
            $table->string('sexo');
            $table->string('cpf')->unique();
            $table->string('rg');
            $table->string('datanasc');
            $table->string('image');
            $table->string('notas')->nullable();
             $table->string('nota_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
