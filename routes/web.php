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
Route::any('/supprimer/{chambre}',[ChambreController::class,'supprimer'])->name('supprimer')->middleware('auth');
Route::any('/modifier/{chambre}',[ChambreController::class,'modifier'])->name('modifier')->middleware('auth');
Route::any('logout',[UserController::class,'logout'])->name('logout')->middleware('auth');