<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function sobre()
    {
       
        return view('sobre');
    }
        
        public function contato()
    {
       
        return view('contato');
    }
<<<<<<< HEAD
   

    public function pesquisar(Request $request)
    {
          $dados = DB::table('caronas')
                ->where('nome', 'like', '%'.$request->pesquisar.'%')
                ->get();
              
        return view('pesquisa', compact('dados'));
        
              
    
=======

    public function pesquisar(Request $request)
    {
          $dados = DB::table('users')
                ->where('name', 'like', '%'.$request->pesquisar.'%')
                ->get();
              
        return view('pesquisa', compact('dados'));
>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c
    }
}
?>
