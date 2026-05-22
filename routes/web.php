<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;


Route::get('/', function () {
    return view('welcome');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function () {

    Route::get('/register', 'showRegister')->name('show.register');

    Route::get('/login', 'showLogin')->name('show.login');

    Route::post('/register', 'register')->name('register');
    
    Route::post('/login', 'login')->name('login');
});

Route::middleware('auth')->controller(PropertyController::class)->group(function(){

Route::get('/properties', 'index')->name('properties.index');

Route::get('/properties/create','create')->name('properties.create');

Route::get('/properties/{type}', 'show')->name('properties.show');

Route::post('/properties', 'store')->name('properties.store');

Route::delete('/properties/{id}', 'destroy')->name('properties.destroy');

});

