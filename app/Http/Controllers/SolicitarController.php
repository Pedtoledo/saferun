<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Solicitar;
use Auth;
use App\User;
use Carbon\Carbon;
use App\Notifications\solitacoes;
use App\Nota;

class SolicitarController extends Controller
{
  public function solicitar(Request $request , Solicitar $solicitar){
   

 
 try{

    $solicitar = new Solicitar();  
    $solicitar->user_id = $request->usuario_id;
    $solicitar->carona_id = $request->carona_id;
    $solicitar->caronista_id = $request->caronista_id;
    $solicitar->save();
    $user = User::find($request->caronista_id);
    $user->notify(new solitacoes($solicitar));

 }catch(\Illuminate\Database\QueryException $e){
   return redirect('/caronas')->with('flash_messages', 'Você ja solicitou essa carona!');
 }

	  return redirect('/caronas')->with('flash_messages', 'Solicitou carona com sucesso!');
    
  }

  public function marcarlida()
  {
    return auth()->user()->unreadNotifications->markAsRead();
    $user->notify(new solitacoes($solicitar));

  }
  public function acao(Request $request , Solicitar $solicitar){
    $solicitar = Solicitar::find($request->id); 
    $solicitar->status = $request->status;
    $solicitar->save();
    return redirect('/caronas');
  }
 
  

   /// public function solicitacoes(){
//$user = Auth::user();
//$solicitar = DB::table('solicitars')
   //             ->where('caronista_id', '=', $user->id)
   //             ->get();
//return view('solicitacoes');

  //  }

}
