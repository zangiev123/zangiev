<?php

use App\Http\Controllers\homepageController;
use App\Http\Controllers\catalogsController;
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


Route::get('/', [App\Http\Controllers\tovarController::class,'show']);


Route::get('/', 'catalogsController@Onas')->name('Onas');

Route::get('/catalog', 'catalogsController@catalog')->name('catalog');

Route::get('/mesto', 'catalogsController@mesto')->name('mesto');

Route::get('/catalog/console', 'catalogsController@console')->name('console');

Route::get('/catalog/console/console1', 'catalogsController@console1')->name('console1');

Route::get('/catalog/console/console2', 'catalogsController@console2')->name('console2');

Route::get('/catalog/console/console3', 'catalogsController@console3')->name('console3');

Route::get('/catalog/acces', 'catalogsController@acces')->name('acces');

Route::get('/catalog/acces/acces1', 'catalogsController@acces1')->name('acces1');

Route::get('/catalog/acces/acces2', 'catalogsController@acces2')->name('acces2');

Route::get('/catalog/acces/acces3', 'catalogsController@acces3')->name('acces3');

Route::get('/catalog/games', 'catalogsController@games')->name('games');

Route::get('/catalog/games/games1', 'catalogsController@games1')->name('games1');

Route::get('/catalog/games/games2', 'catalogsController@games2')->name('games2');

Route::get('/catalog/games/games3', 'catalogsController@games3')->name('games3');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



