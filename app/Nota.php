<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
     public function Carona(){
        return $this->belongsTo('App\Carona');
    }
       public function Solicitar(){
        return $this->hasMany('App\Carona');
    }
}
