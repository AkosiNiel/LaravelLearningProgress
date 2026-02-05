<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/luzon', [PageController::class, 'luzon'])->name('luzon');
Route::get('/visayas', [PageController::class, 'visayas'])->name('visayas');
Route::get('/mindanao', [PageController::class, 'mindanao'])->name('mindanao');

