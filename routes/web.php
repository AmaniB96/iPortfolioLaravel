<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

// --- Frontend Routes ---
Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');


// --- Backend Routes ---

// This is the main route for your admin dashboard
Route::get('/back/home', [BackHomeController::class, 'index'])->name('backHome.index');

// These resource routes create all the necessary URLs for CRUD operations
// (index, create, store, show, edit, update, destroy) for each feature.
Route::resource('/back/about', AboutController::class)->names('backAbout');
Route::resource('/back/portfolio', PortfolioController::class)->names('backPortfolio');
Route::resource('/back/skills', SkillController::class)->names('backSkill');
