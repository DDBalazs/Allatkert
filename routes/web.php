<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllatkertController;

Route::get('/', [AllatkertController::class, 'Welcome']);

Route::get('/emlosok', [AllatkertController::class, 'Emlosok']);

Route::get('/madarak', [AllatkertController::class, 'Madarak']);

Route::get('/hullok', [AllatkertController::class, 'Hullok']);

Route::view('/hirlevel', 'Hirlevel');
Route::post('/hirlevel', [AllatkertController::class, 'Hirlevel']);

Route::view('/success', 'Success');
