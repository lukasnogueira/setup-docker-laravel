<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])-> name('home');
Route::get('/users', [UserController::class, 'index'])-> name('user.index');
Route::get('/users/create', [UserController::class, 'create'])-> name('user.create');
Route::get('/users', [UserController::class, 'store'])-> name('user.store');
Route::get('/users/{user}', [UserController::class, 'show'])-> name('user.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])-> name('user.edit');
Route::put('/users/{user}', [UserController::class, 'update'])-> name('user.update');
Route::put('/users/{user}', [UserController::class, 'destroy'])-> name('user.dstroy');


