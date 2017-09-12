<?php

namespace App\Http\Controllers;

use App\Carona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CaronaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $caronas = DB::select('select * from caronas');
    return view('caronas.index')->with('caronas', $caronas);
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
         $carona = new Carona();
        $carona->nome = $request->namecarona;
        $carona->usuario_id = $request->usuario_id;
         $carona->save();

      

        return redirect('/home');
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
        //
    }
}
