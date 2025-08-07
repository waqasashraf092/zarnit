<?php

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

Route::get('/blogs', function () {
    return view('about');
})->name('blogs');

Route::get('/contact', function () {
    return view('about');
})->name('contact');

Route::get('/login', function () {
    return view('about');
})->name('login');

Route::get('/signup', function () {
    return view('about');
})->name('signup');
