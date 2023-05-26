<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\PageController as PokedexController;

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

Route::get('/', [PokedexController::class, 'index'])->name('home');
Route::get('/pokedex', [PokedexController::class, 'pokedex'])->name('pokedex');
