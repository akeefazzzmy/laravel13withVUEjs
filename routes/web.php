<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');
Route::inertia('/about', 'About', ['title' => 'About us'])->name('about');

Route::middleware('guest')->group(function(){
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store']);
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->middleware('throttle:5,1');
});

Route::middleware('auth')->group(function(){
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
    Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
});