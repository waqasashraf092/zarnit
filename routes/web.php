<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogsController::class, 'show'])->name('blogs.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup');
