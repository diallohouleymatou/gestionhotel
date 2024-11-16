<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class,'home'])->name('home')->middleware('guest');
Route::any('/register',[UserController::class,'register'])->name('register')->middleware('guest');
Route::any('/login',[UserController::class,'login'])->name('login')->middleware('guest');