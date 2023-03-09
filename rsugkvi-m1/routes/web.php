<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\catalogcontroller;

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
Route::get('/',function(){
    return view('welcome');
=======
Route::get('/', function () {
    return view('homepage');
>>>>>>> 633cfdf08b1a2dd18314d33a4bbd431a70e0f297
});

Route::get('/catalog',function(){
    return view('catalog');
});



<<<<<<< HEAD
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 633cfdf08b1a2dd18314d33a4bbd431a70e0f297
