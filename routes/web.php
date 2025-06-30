<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Wellcome;

Route::get('/', [Wellcome::class, 'index']);
