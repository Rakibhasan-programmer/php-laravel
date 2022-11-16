<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullNameController;

Route::get('/', [HomeController::class, 'home'])->name('/');
Route::get('/full-name', [HomeController::class, 'fullName'])->name('full-name');
Route::post('/get-full-name', [FullNameController::class, 'fullName'])->name('get-full-name');



Route::get('/calculator', [HomeController::class, 'calculator'])->name('calculator');



