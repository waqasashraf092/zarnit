<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/lang/{language}', function ($language) {
    $languages = config('app.languages');
    $exist = array_key_exists($language, $languages);
    if ($exist) {
        session()->put('language', $language);
    }
    return redirect()->back();
})->name('lang.switch');

Route::controller(HomeController::class)
    ->name('home.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact-us', 'contact')->name('contact');
        Route::get('/privacy-policy', 'privacyPolicy')->name('privacy-policy');
        Route::get('/terms-of-service', 'termsOfService')->name('terms-of-service');
        Route::get('/early-access', 'earlyAccess')->name('early-access');
        Route::post('/early-access', 'earlyAccessSave')->name('early-access-save');
    });


Route::controller(ProductsController::class)
    ->prefix('products')
    ->name('products.')
    ->group(function () {
        Route::get('/', 'index')->name('index');      // /products
        Route::get('/zarn', 'zarn')->name('zarn');    // /products/zarn
        Route::get('/reolyy', 'reolyy')->name('reolyy'); // /products/reolyy
    });


Route::resource('blogs', BlogsController::class);
