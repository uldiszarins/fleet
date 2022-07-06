<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TruckController;

Route::resource('/trucks', TruckController::class);

Route::get('/reports', function () {
    return view('reports');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
