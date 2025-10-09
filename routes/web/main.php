<?php

use App\Http\Controllers\Main\AboutController;
use App\Http\Controllers\Main\CheckoutController;
use App\Http\Controllers\Main\ContactController;
use App\Http\Controllers\Main\GalleryController;
use App\Http\Controllers\Main\HomeController;
use App\Http\Controllers\Product\ListController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/contact', ContactController::class)->name('contact');
Route::get('/checkout', CheckoutController::class)->name('checkout');
Route::get('/gallery', GalleryController::class)->name('gallery');

Route::get('/product-list', ListController::class)->name('product.list');
