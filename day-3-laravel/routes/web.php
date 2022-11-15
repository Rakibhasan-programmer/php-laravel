<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('/');
Route::get('/full-name', [HomeController::class, 'fullName'])->name('full-name');
Route::get('/calculator', [HomeController::class, 'calculator'])->name('calculator');
Route::post('/full-name', [HomeController::class, 'fullName1'])->name('full-name');

