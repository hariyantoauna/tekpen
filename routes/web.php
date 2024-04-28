<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\HastagController;
use App\Http\Controllers\Blog\BerandaController;
use App\Http\Controllers\Blog\HalamanController;
use App\Http\Controllers\Blog\HastagsController;
use App\Http\Controllers\Dashboard\DashboardPostController;
use App\Http\Controllers\Dashboard\DashboardUserController;
use App\Http\Controllers\Dashboard\DashboardBiodataController;

Route::get('/', [BerandaController::class, 'index']);
Route::get('/halaman/{post:slug}/{reg}', [HalamanController::class, 'show']);
Route::get('/hastag/{hastag:hastag}', [HastagController::class, 'show']);
Route::get('/hastags', [HastagsController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/dashboard/post', DashboardPostController::class);
Route::get('/dashboard/post/setup/{post}', [DashboardPostController::class, 'setup']);
Route::post('/dashboard/post/set/{post}', [DashboardPostController::class, 'set']);
Route::post('/dashboard/post/hatasg/delete/{hastag}', [DashboardPostController::class, 'hastag_delete']);


Route::resource('/dashboard/users', DashboardUserController::class);
Route::get('/dashboard/users/setup/{user}', [DashboardUserController::class, 'setup']);
Route::post('/dashboard/users/set/{user}', [DashboardUserController::class, 'set']);


Route::resource('/dashboard/biodata', DashboardBiodataController::class);
