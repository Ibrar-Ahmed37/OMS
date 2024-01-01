<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});

Route::get('/userlogin',function(){
    return view('userLogin');
});

Route::get('/ngologin',function(){
    return view('ngoLogin');
});

Route::get('/adminlogin',function(){
    return view('adminLogin');
});