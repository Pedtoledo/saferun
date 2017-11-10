<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Historico;
use App\Carona;
use App\solicitar;
use App\User;   
use Illuminate\Support\Facades\Auth;


class HistoricoController extends Controller
{

    public function index(){
      
  {
      $user = Auth::user();
      $caronas = Solicitar::with('carona')->where('user_id', '=', $user->id)->get();

      $caronasof = Solicitar::with(['carona','user'])->where('caronista_id', '=', $user->id)->get();

      
     return view('historicocarona', compact('caronas','caronasof'));
        
    }   
}
}
