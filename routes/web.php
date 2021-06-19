<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {return view('homepage.index');});
Route::get('/tentang', function () {return view('homepage.tentang.tentang');});
Route::get('/berita', function () {return view('homepage.berita.berita');});
Route::get('/akademik', function () {return view('homepage.akademik.akademik');});   
Route::get('/event', function () {return view('homepage.acara.acara');});   
Route::get('/portal', function () {return view('portal.pages.login');});
Route::get('/portal/daftar', function () {return view('portal.pages.daftar');});
Route::get('/portal/daftar', function () {return view('portal.pages.daftar');});
