<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WinkelwagenController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/winkelwagen', function(){
        return view('winkelwagen/index');
    })->name("winkelwagen");
    Route::post('/winkelwagen', [WinkelwagenController::class, 'toevoegen'])->name('game.toevoegen');
    Route::get('/winkelwagen', [WinkelwagenController::class, 'show'])->name("game.show");
    Route::get('/succes', function (){
        return view('winkelwagen/besteld');
    })->name('succes');
    Route::post('/succes', [WinkelwagenController::class, 'voltooien'])->name('winkel.voltooi');
});

require __DIR__.'/auth.php';
