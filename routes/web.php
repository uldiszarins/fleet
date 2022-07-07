<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\EmployeeController;

Route::resource('/trucks', TruckController::class)
    ->middleware('auth');
Route::resource('/employees', EmployeeController::class)
    ->middleware('auth');

Route::get('/reports', function () {
    return view('reports');
})->middleware('auth');;

Route::get('/', function() {
    return redirect('/trucks');
});

Auth::routes();


