<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

//Homepage
Route::view('/', 'homepage.index');
Route::view('/tentang', 'homepage.tentang.tentang');
Route::view('/berita', 'homepage.berita.berita');
Route::view('/akademik', 'homepage.akademik.akademik');
Route::view('/acara', 'homepage.acara.acara');

//Portal
Route::get('/portal', [AuthController::class, 'getLogin']);
Route::post('/portal', [AuthController::class, 'postLogin'])->name('login');
Route::get('/portal/daftar', [AuthController::class, 'getRegister']);
Route::post('/portal/daftar', [AuthController::class, 'postRegister'])->name('register');
