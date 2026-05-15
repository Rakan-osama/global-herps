<?php

use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix'     => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    Route::get('/',          [PageController::class, 'home'])->name('client.homepage');
    Route::get('/about',     [PageController::class, 'about'])->name('client.about');
    Route::get('/products',          [PageController::class, 'products'])->name('client.products');
    Route::get('/products/{slug}',   [PageController::class, 'productDetail'])->name('client.product');
    Route::get('/services',  [PageController::class, 'services'])->name('client.services');
    Route::get('/contact',   [PageController::class, 'contact'])->name('client.contact');
    Route::post('/contact',  [PageController::class, 'contactSubmit'])->name('contact.submit');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile',    [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',  [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
