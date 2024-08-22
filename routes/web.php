<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SomeController;
use App\Http\Controllers\MenuController;


Route::get('/', [MenuController::class, 'home']);
Route::get('/about', [MenuController::class, 'about']);
Route::get('/docs', [MenuController::class, 'document']);
Route::get('/login', [MenuController::class, 'login']);
Route::get('/image', [MenuController::class, 'image']);
Route::get('/album', [MenuController::class, 'album']);
Route::get('/account', [MenuController::class, 'account']);
Route::get('/video', [MenuController::class, 'video']);
