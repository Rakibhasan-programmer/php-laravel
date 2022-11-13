<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/bitm', [HomeController::class, 'bitm']);
Route::get('/basis', [HomeController::class, 'basis']);
