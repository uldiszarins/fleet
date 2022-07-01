<?php

use Illuminate\Support\Facades\Route;

Route::get('/trucks', function () {
    return view('trucks');
});

Route::get('/reports', function () {
    return view('reports');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
