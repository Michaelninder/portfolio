<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/set-locale/{locale}', function ($locale) {
    if (in_array($locale, array_map('basename', File::directories(resource_path('lang'))))) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('lang.set');
