<?php

use App\Http\Controllers\Guests\PageController;
use App\Http\Controllers\PokedexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/pokedex', [PageController::class, 'pokedex'])->name('pokedex');
//Route::get('/region', [RegionController::class, 'region'])->name('regions');

Route::resource('/pokedex', PokedexController::class, ['as' => 'admin']);
Route::resource('/regions', RegionController::class, ['as' => 'admin']);
