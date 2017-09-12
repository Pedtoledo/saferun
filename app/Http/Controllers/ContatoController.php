<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;
use Session;

class ContatoController extends Controller
{
    public function enviaContato(Request $request)
    {
     Mail::to('vieiraleonardo695@gmail.com')->send(new ContatoEmail($request));
     return redirect ('/home');
     Session::flash('success', 'Parabéns');
      

   
    }
   
   
}
			