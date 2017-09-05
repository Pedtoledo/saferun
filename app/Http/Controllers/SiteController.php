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

    public function pesquisar(Request $request)
    {
          $dados = DB::table('users')
                ->where('name', 'like', '%'.$request->pesquisar.'%')
                ->get();
              
        return view('pesquisa', compact('dados'));
    }
}
?>
