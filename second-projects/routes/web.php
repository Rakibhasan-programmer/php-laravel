<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,"sayHello"])->name('home');
Route::get('/about', [HomeController::class,"about"])->name('about');
Route::get('/contact', [HomeController::class,"contact"])->name('contact');
