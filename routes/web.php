<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GameController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/winkel', [GameController::class, 'AllGames'])->name("allgames");
Route::get('/winkel/uitgave', [GameController::class, 'releaseDate'])->name("release");
Route::get('/winkel/beoordeling', [GameController::class, 'rating'])->name("rating");
Route::get('/winkelwagen', function(){
    return view('winkelwagen/index');
})->name("winkelwagen");
