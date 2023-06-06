<?php

use App\Http\Controllers\Guests\PageController;
use App\Http\Controllers\PokedexController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/pokedex', [PageController::class, 'pokedex'])->name('pokedex');

Route::resource('/pokedex', PokedexController::class, ['as' => 'admin']);
