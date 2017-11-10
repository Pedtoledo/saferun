<?php

namespace App\Http\Controllers;

use App\Carona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use \Input as Input;

class CaronaController extends Controller
{
    private $caronas;
    private $totalPage = 5;

 public function __construct(Carona $carona)
 {
     $this->carona = $carona;
 }
    public function index()
    {
    

   $caronas = $this->carona->paginate($this->totalPage);
   return view('caronas.index', compact('caronas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caronas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
       // $this->validate($request, [
                    //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       // ]);
        if($request->datasaida < $request->datachegada){

            $imagecarona = time().'.'.$request->image->getClientOriginalExtension();
            
            $request->image->move(public_path('imagescaronas'), $imagecarona);
            
    
    
            $carona = new Carona();
            $carona->nome = $request->namecarona;
            $carona->usuario_id = $request->usuario_id;
            $carona->descricao = $request->desccarona;
            $carona->image = $imagecarona;
            $carona->chegada = $request->chegada;
            $carona->saida = $request->saida;
            $carona->hrsaida = $request->hrsaida;
            $carona->hrchegada = $request->hrchegada;
            $carona->datasaida = $request->datasaida;
            $carona->datachegada = $request->datachegada;
           
    
            
            
            $carona->save();
    
            // \Session::flash('flash_message', 'Carona cadastrada com sucesso!');
    
            return redirect('/caronas')->with('flash_messages', 'Carona cadastrada com sucesso!');
    

        } else {
            if ($request->hrsaida < $request->hrchegada){
                 $imagecarona = time().'.'.$request->image->getClientOriginalExtension();
        
        $request->image->move(public_path('imagescaronas'), $imagecarona);
        


        $carona = new Carona();
        $carona->nome = $request->namecarona;
        $carona->usuario_id = $request->usuario_id;
        $carona->descricao = $request->desccarona;
        $carona->image = $imagecarona;
        $carona->chegada = $request->chegada;
        $carona->saida = $request->saida;
        $carona->hrsaida = $request->hrsaida;
        $carona->hrchegada = $request->hrchegada;
        $carona->datasaida = $request->datasaida;
        $carona->datachegada = $request->datachegada;
       

        
        
        $carona->save();

        // \Session::flash('flash_message', 'Carona cadastrada com sucesso!');

    	return redirect('/caronas')->with('flash_messages', 'Carona cadastrada com sucesso!');

            } else {
                return 'ok';
            }
        }

          	
 

 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carona  $carona
     * @return \Illuminate\Http\Response
     */
    public function show(Carona $carona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carona  $carona
     * @return \Illuminate\Http\Response
     */
    public function edit(Carona $carona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carona  $carona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carona $carona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carona  $carona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carona $carona)
    {
     $caronas = Carona::find($carona->id);
        $caronas->delete();
                \Session::flash('flash_message', 'Carona deletada com sucesso!');
        return redirect('/admin/admin/caronas');
    }

    public function unica($id)
    {
        $carona = Carona::find($id);
       return view ('caronaunica', compact ('carona'));
    }
}
