<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
     
    public function informacao()
    {
        return view('sobre');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function contato()
    {
        return view('contato');
    }
     public function pesquisar(Request $request)
    {
          $dados = DB::table('caronas')
                ->where('chegada','like', '%'.$request->chegada.'%')
                ->where('saida','like', '%'.$request->saida.'%')
                ->get();

    return view('pesquisa', compact('dados'));
}






       public function admpesquisar(Request $request)
    {
          $dados = DB::table('caronas')
                ->where('nome', 'like', '%'.$request->pesquisar.'%')
                ->get();
              
        return view('admin.caronas.pesquisa', compact('dados'));
        
            

    }
     public function usuariopesquisar(Request $request)
    {
          $dados = DB::table('users')
                ->where('email', 'like', '%'.$request->pesquisar.'%')
                ->get();
              
        return view('admin.usuarios.pesquisa', compact('dados'));
        
            

    }

    public function telefone()
    {
       $credentials = new Nexmo\Client\Credentials\Basic('b0ece844', 'fea960ae543cafd5');
$client = new Nexmo\Client($credentials);

$message = $client->message()->send([
  'from' => 'Nexmo',
  'to' => $telefone,
  'text' => 'Oi'
]);
    }
    
}

