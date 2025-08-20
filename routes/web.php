<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/lang/{language}', function ($language) {
    $languages = config('app.languages');
    $exist = array_key_exists($language, $languages);
    if ($exist) {
        session()->put('language', $language);
    }
    return redirect()->back();
})->name('lang.switch');

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/products', 'products')->name('home.products');
    Route::get('/about', 'about')->name('home.about');
    Route::get('/contact-us', 'contact')->name('home.contact');
    Route::get('/early-access', 'earlyAccess')->name('home.early-access');
    Route::post('/early-access', 'earlyAccessSave')->name('home.early-access-save');
    Route::get('/privacy-policy', 'privacyPolicy')->name('home.privacy-policy');
    Route::get('/terms-of-service', 'termsOfService')->name('home.terms-of-service');
});

Route::resource('blogs', BlogsController::class);
