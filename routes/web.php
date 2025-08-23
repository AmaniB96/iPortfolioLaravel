<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackHomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

// --- Frontend Routes ---
Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');


// --- Backend Routes ---
Route::get('/back/home', [BackHomeController::class, 'index'])->name('backHome.index');

// Resource routes for full CRUD functionality
Route::resource('/back/about', AboutController::class)->names('backAbout');
Route::resource('/back/portfolio', PortfolioController::class)->names('backPortfolio');
Route::resource('/back/skills', SkillController::class)->names('backSkill');
Route::resource('/back/services', ServiceController::class)->names('backService');
Route::resource('/back/testimonials', TestimonialController::class)->names('backTestimonial');
Route::resource('/back/contact', ContactController::class)->names('backContact');
Route::resource('/back/messages', MessageController::class)->only(['index', 'destroy'])->names('backMessage');