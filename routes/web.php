<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\UserController;

Route::resource('/trucks', TruckController::class);
Route::resource('/users', UserController::class);

Route::get('/reports', function () {
    return view('reports');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
