<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function() {
    return "Home";
})->name('home');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    
    Route::resource('country', CountryController::class);
    Route::resource('state', StateController::class);
    Route::resource('city', CityController::class);
});