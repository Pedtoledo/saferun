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
<<<<<<< HEAD
              $table->string('cpf')->unique();
=======
              $table->string('cpf');
>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c
               $table->string('rg');
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
