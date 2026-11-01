<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\SeatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes for the Cinex cinema booking demo: browse movies, pick a showtime
| and reserve seats.
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');

Route::get('/showtimes', [ShowtimeController::class, 'index'])->name('showtimes.index');
Route::get('/showtimes/{showtime}', [ShowtimeController::class, 'show'])->name('showtimes.show');

Route::get('/showtimes/{showtime}/seats', [SeatController::class, 'show'])->name('show.seats');
Route::post('/seats/update', [SeatController::class, 'update'])->name('seats.update');
