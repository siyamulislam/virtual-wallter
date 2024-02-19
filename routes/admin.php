<?php

use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrollController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get ('/dashboard',       [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('packages',PackageController::class);
//    Route::resource('packages',PackageController::class)->middleware('editor');

    Route::get('/approve-package/{id}',[PackageController::class,'approvepackage'])->name('packages.approve')->middleware('admin');

    Route::resource('users',UserController::class);
    Route::get('/manage-enrolls',[EnrollController::class,'manageEnroll'])->name('mange-enroll')->middleware('admin');

    Route::get('/approve-enroll/{id}',[EnrollController::class,'approveEnroll'])->name('enroll.approve')->middleware('admin');
    Route::get('/reject-enroll/{id}',[EnrollController::class,'rejectEnroll'])->name('enroll.reject')->middleware('admin');
    Route::get('/my-enrolls',[EnrollController::class,'myEnroll'])->name('my-enroll');
    Route::resource('documents',DocumentController::class);

});
