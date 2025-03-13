<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllatkertController;

Route::get('/', [AllatkertController::class, 'Welcome']);

Route::get('/emlosok', [AlltokController::class, 'Emlosok']);
