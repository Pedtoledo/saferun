<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Nota;
use App\Comentario;
use App\Carona;

class SiteController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
    public function sobre()
    {
       
        return view('sobre');
    }
        
        public function contato()
    {
       
        return view('contato');
    }
    public function perfil($id)
    {
      
      $usuario = User::find($id);
        $carona = Carona::find($id);
        $nota = DB::table('notas')
                ->where('caronista_id','=', $id)
                ->avg('nota');




        $comentarios = Comentario::with(['user'])->where('caronista_id', '=', $id)->get();
               

    

     return view('perfil', compact('nota','usuario','comentarios'));
        

    }
    public function comentar(Request $request){
        $comentario = new Comentario;
        $comentario->user_id = $request->user_id;   
        $comentario->caronista_id = $request->caronista_id;
        $comentario->comentario = $request->comentario;
        $comentario->save();
        
          return redirect('perfil/'.$request->caronista_id)->with('flash_messages', 'Comentou com sucesso!');
    
    }
    public function deletarComentario(Request $request){
        $comentario = Comentario::find($request->comentario_id);
        $comentario->delete();
         return redirect('perfil/'.$request->caronista_id)->with('flash_messages', 'Deletou mensagem com sucesso!');
    }


    public function telefone()
    {
        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
        'to' => '5519993855214',
         'from' => 'NEXMO',
        'text' => ' Confirmar codigo.',

 ]); 
    }
   

   
}
?>
