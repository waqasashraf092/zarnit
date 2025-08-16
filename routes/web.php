<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/products', 'products')->name('home.products');
    Route::get('/about', 'about')->name('home.about');
    Route::get('/contact-us', 'contact')->name('home.contact');
    Route::get('/early-access', 'earlyAccess')->name('home.early-access');
    Route::post('/early-access', 'earlyAccessSave')->name('home.early-access-save');
});

Route::resource('blogs', BlogsController::class);
