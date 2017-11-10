<?php

namespace App\Http\Controllers;
use App\Carona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use \Input as Input;

class CaronaControllerAdmin extends Controller
{
      private $caronas;
    private $totalPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function __construct(Carona $carona)
 {
     $this->carona = $carona;
 }
    public function index()
    {
    
   $caronas = $this->carona->paginate($this->totalPage);
   return view('admin.caronas.index', compact('caronas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(carona $carona)
   {
     $caronas = Carona::find($carona->id);
        $caronas->delete();
        \Session::flash('flash_message', 'Carona deletada com sucesso!');

    	   return redirect('admin');
    	
       
    }
}
