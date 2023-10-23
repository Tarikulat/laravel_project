<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//....Tanvir start Router create.......

Route::controller(DashboardController::class)->group(function() {
    Route::get('/dheader', 'index')-> name('dheader');
});





Route::controller(ProductController::class)->group(function() {
     Route::get('/welcome', 'index')-> name('tanvir');
});

Route::controller(AlladsController::class)->group(function() {
    Route::get('/allads', 'index')-> name('ads');
});

Route::controller(ProductViewController::class)->group(function() {
    Route::get('/productview', 'index')-> name('productview');
});

Route::controller(UserProfileController::class)->group(function() {
    Route::get('/userprofile', 'index')-> name('userprofile');
});
