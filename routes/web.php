<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChambreController;

Route::get('/',[UserController::class,'home'])->name('home');
Route::any('/register',[UserController::class,'register'])->name('register');
Route::any('/login',[UserController::class,'login'])->name('login');
Route::any('/acceuil',[UserController::class,'acceuil'])->name('acceuil')->middleware('auth');
Route::any('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::any('/ajouter',[ChambreController::class,'ajouter'])->name('ajouter')->middleware('auth');
