<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Nota;
use File;
use \Input as Input;
class UserController extends Controller
{
  private $users;
private $totalPage = 5;

 public function __construct(User $user)
 {
     $this->user = $user;
 }

    public function index()
  {
   $users = $this->user->paginate($this->totalPage);
   return view('admin.usuarios.index', compact('users'));
    }
     public function store(Request $request)
    {
        
         //$this->validate($request, [
         //           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);


        //$imageName = time().'.'.$request->image->getClientOriginalExtension();
        
      //  $request->image->move(public_path('images'), $imageName);

      //  $user->image = $imageName;

      //  $user->save();
    }
     public function nota(Request $request , Nota $nota){

$nota = new Nota();  
$nota->id = $request->nota_id;
$nota->save();
return redirect('/caronas');

  }
  
    public function destroy($id)
     {
     $users = User::find($id);
        $users->delete();
                \Session::flash('flash_message', 'Usuario deletado com sucesso!');
        return redirect('/admin/usuarios');
    }
    
    
    
}
