<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\BerandaController;
use App\Http\Controllers\Blog\HalamanController;

Route::get('/', [BerandaController::class, 'index']);
Route::get('/halaman/{post:slug}/{reg}', [HalamanController::class, 'show']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
