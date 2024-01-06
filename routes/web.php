<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogoutController;
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

Route::get('/', function () {return view('home.home');});

//To show the login Page
Route::get('/login/{user_type?}',[AuthController::class, 'login'])->name('login');
Route::get('/validateLogin}',[AuthController::class, 'validateLogin'])->name('validateLogin');

// To default User login
Route::get('/login',[AuthController::class,'login']);
// Route::get('/modal',[AuthController::class,'modal'])->name('modal');

// Route::get('/submitDonation',[AuthController::class,'submitDonation'])->name('submitDonation');

//TO show sign up Page
Route::get('/signup/{user_type?}',[AuthController::class,'signup'])->name('signup');

//Logout controller
Route::get('/logout', [LogoutController::class,'logout'])->name('logout');

//To register the User
Route::post('/registeruser',[AuthController::class,'registerUser'])->name('registeruser');

// Route::get('/adminlogin',[AuthController::class,'adminLogin']);
// Route::get('/dbconn',function(){return view('dbconn');});



