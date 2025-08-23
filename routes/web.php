<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Routes pour le Frontend
Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');

//Route pour le Backend

Route::resource('backHome', AboutController::class);

Route::get('/back/home', [PortfolioController::class, 'index'])->name('backHome.index');
Route::get('/back/portfolio/create', [PortfolioController::class, 'create'])->name('backPortfolio.create');
Route::post('/back/portfolio', [PortfolioController::class, 'store'])->name('backPortfolio.store');
Route::delete('/back/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('backPortfolio.destroy');
