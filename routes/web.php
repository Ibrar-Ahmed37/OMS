<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrphanController;

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

//Modal for Donations
Route::get('/donation', [DonationController::class,'donation'])->name('donation');
Route::post('/submit_donation', [DonationController::class,'submitDonation'])->name('submit_donation');

//To register the User
Route::post('/registeruser',[AuthController::class,'registerUser'])->name('registeruser');

// routes/web.php
Route::get('/user/registration', [UserController::class, 'showUserRegistrationForm'])->name('user.registration');
Route::post('/user/registration/submit', [UserController::class, 'submitRegistration'])->name('user.registration.submit');

Route::get('/guardian/registration', [GuardianController::class, 'showGuardianRegistrationForm'])->name('guardian.registration');
Route::post('/guardian/registration/submit', [GuardianController::class, 'submitRegistration'])->name('guardian.registration.submit');

Route::get('/orphan/registration', [OrphanController::class, 'showOrphanRegistrationForm'])->name('orphan.registration');
Route::post('/orphan/registration/submit', [OrphanController::class, 'submitRegistration'])->name('orphan.registration.submit');