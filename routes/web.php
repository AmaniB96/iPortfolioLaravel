<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Routes pour le Frontend
Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');

//Route pour le Backend

Route::resource('backHome', AboutController::class);