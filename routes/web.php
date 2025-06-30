<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Wellcome;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SericesController;
use App\Http\Controllers\ContactController;

Route::get('/', [Wellcome::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
