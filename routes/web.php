<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\EnrollController;

Route::as('front.')->group(function (){
    Route::get('/',                 [FrontController::class,'home'])->name('home');
    Route::get('/home',             [FrontController::class,'home'])->name('home');

    Route::get('/about',            [FrontController::class,'about'])->name('about');
    Route::get('/contact',          [FrontController::class,'contact'])->name('contact');

    Route::get('/package/{slug}',   [FrontController::class,'packageDetails'])->name('package.details');
    Route::get('/checkout/{slug}',   [FrontController::class,'checkoutPage'])->name('checkout-page');
    Route::post('/place-order/',   [EnrollController::class,'placeOrder'])->name('package.order');
});

