<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotaController extends Controller
{
    
      
     public function store(Request $request)
     {
 try{
  $notas = new Nota;
        $notas->nota = $request->nota;
        $notas->user_id = $request->user_id;
        $notas->carona_id = $request->carona_id;
        $notas->caronista_id = $request->caronista_id;
  
        $notas->save();
    

 }catch(\Illuminate\Database\QueryException $e){
   return redirect('/caronas')->with('flash_messages', 'Você ja deu nota!');
 }

	  return redirect('/caronas')->with('flash_messages', 'Deu nota com sucesso!');
    
  }

     }



      
       
   

