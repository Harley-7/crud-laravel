<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

//Signup
Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
Route::post('/signup', [SignUpController::class, 'create'])->name('signup.create');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');

//Updates
Route::get('/editar/{user}', [UserController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/update/{user}', [UserController::class, 'update'])->name('update')->middleware('auth');
Route::put('/passwordupdate/{user}', [UserController::class, 'password_update'])->name('password.update')->middleware('auth');
Route::get('/editpassword', [UserController::class, 'edit_password'])->name('edit.password')->middleware('auth');

//Delete
Route::get('/delete', [UserController::class, 'delete'])->name('delete')->middleware('auth');
Route::delete('/destroy/{user}', [UserController::class, 'destroy'])->name('destroy')->middleware('auth');
