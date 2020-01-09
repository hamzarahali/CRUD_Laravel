<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User ;
Route :: get ( "/" , function () {
    $users = User :: all() ;
    return view ('index' , compact('users')) ;
});
Route :: get ("/inscription" , function () {
    return view ('inscription') ;
}) ;
Route :: resource ( "users" , "CrudsController" ) ;
