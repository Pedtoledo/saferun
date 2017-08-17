<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function pesquisa()
    {
       

    }
    }