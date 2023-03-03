<?php

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

use App\Http\Controllers\EventController;
use App\Models\User;

Route::get('/', [EventController::class, 'index']);

Route::get('/signIn', function () {
    return view('signIn');
});

Route::get('/r', [EventController::class, 'r']);

Route::post('/enter', [EventController::class, 'enter']);

Route::post('/su', [EventController::class, 'su']);

Route::post('/logout', [EventController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $us = Auth::user();

        return view('dashboard', ['user' => $us]);
    })->name('dashboard');
});
