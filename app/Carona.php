<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carona extends Model
{
  
 public function solicitars(){
       return $this->hasMany('App\Carona');
  }
 public function user(){
       return $this->belongsTo('App\User');
  }
  public function nota(){
         return $this->hasMany('App\Nota');
  }
}
