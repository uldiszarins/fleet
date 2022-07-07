<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;

Route::resource('/trucks', TruckController::class)
    ->middleware('auth');
Route::resource('/employees', EmployeeController::class)
    ->middleware('auth');
Route::get('/reports', [ReportController::class, 'index'])
    ->middleware('auth');

Route::get('/', function() {
    return redirect('/trucks');
});

Auth::routes();


