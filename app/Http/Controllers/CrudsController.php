<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User :: all() ;
        return view ('index' , compact('users')) ;
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
        $request -> validate([
            'name' => 'required' ,
            'email' => 'required' ,
            'password' => 'required'
        ]) ;
        User::create($request->all()) ;
        return redirect ('/') ;
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
        $user = User :: find($id) ;
        return view ('modification',compact('user')) ;
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
        $user = User :: find ($id) ;
        $user -> name = $request -> name  ;
        $user -> email = $request -> email  ;
        $user -> password = $request -> password  ;
        $user -> save() ;
        return redirect ('/') -> with('success', 'Client Modifier') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User :: find ($id) ;
        $user -> delete() ;
        return redirect ('/') -> with('danger', 'Client Supprimer') ;
    }

}
