<?php

namespace App\Http\Controllers;

use App\admin;
use App\user;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view ('admin.dashboard');
    }


    public function login()
    {
        return view ('admin.login');
    }
      public function postLogin (Request $request)
    {
        $validator = validator($request->all(),[
            'email' => 'required|min:3|max:100',
            'password' => 'required|min:3|max:100',
        ]);
        
        if ( $validator->fails()){
            return redirect('/admin/login')
            ->withErrors($validator)
            ->withInput();
        }
            $credentials = ['email' => $request->get('email') , 'password' => $request->get('password')];
        if ( auth()->guard('admin')->attempt($credentials) ) {
            return redirect('/admin');
        } else {
            return redirect('admin/login');
           
        }
    }
     public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('/admin/login');
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
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
 
}
