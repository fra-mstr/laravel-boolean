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

Route::get('/', function () {
    return view('home');
});

Route::get('/corso', function(){
  return view('corso');
});

Route::get('/carriere', function(){
  return view('dopoilcorso');
});

Route::get('/lezione-gratuita', function(){
  return view('camp');
});
