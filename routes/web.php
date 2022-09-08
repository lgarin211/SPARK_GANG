<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::get('/', function () {
    $data=DB::table("pengumumen")->get();
    // dd($data);
    $pas=['data'=>$data];
    return view('vancase1',$pas);
});

Route::get('/home', function () {
    $data=DB::table("renungans")->get();
    $data1=DB::table("pengumumen")->get();
    $pas=['data'=>$data,'data1'=>$data1];
    // dd($pas);
    return view('home',$pas);
});

Route::get('/detail', function () {
    $data=DB::table("renungans")->first();
    // dd($data);
    $pas=['data'=>$data];
    return view('detail',$pas);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
