<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class solicitar extends Model
{
  
     public function User(){
        return $this->belongsTo('App\User');
    }
     public function Carona(){
        return $this->belongsTo('App\Carona');
    }
     public function nota(){
        return $this->hasMany('App\Nota');
    }

}
