<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialsController;


Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/About', [AboutController::class, 'index'])->name('About');
Route::get('/Blog', [BlogController::class, 'index'])->name('Blog');
Route::get('/Product', [ProductController::class, 'index'])->name('Product');
Route::get('/Testimonials', [TestimonialsController::class, 'index'])->name('Testimonials');