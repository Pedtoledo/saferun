<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
   
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'email', 'password','sobrenome','cpf','rg','telefone','sexo','datanasc','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  public function solicitars(){
     return $this->hasMany('App\solicitar');
   }
    public function Carona(){
     return $this->hasMany('App\Carona');
   }
   public function Nota(){
     return $this->hasMany('App\Nota');
   }
    public function Comentario(){
     return $this->hasMany('App\Comentario');
}
}

