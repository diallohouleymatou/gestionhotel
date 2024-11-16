<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class,'home'])->name('home');
Route::any('/register',[UserController::class,'register'])->name('register');
Route::any('/login',[UserController::class,'login'])->name('login');
Route::any('/acceuil',[UserController::class,'acceuil'])->name('acceuil')->middleware('auth');