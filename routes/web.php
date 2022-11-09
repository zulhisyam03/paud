<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){return redirect('/login');});

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::resource('/register', RegisterController::class)->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class,'index'])->middleware(('auth'));
Route::get('/profile/sekolah/',[SekolahController::class,'editProfile'])->middleware('auth');
Route::get('/profile/kontak/',[SekolahController::class,'editKontak'])->middleware('auth');
