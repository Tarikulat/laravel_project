<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminLoginController;   //..login
use App\Http\Controllers\Admin\DashboardController;   //..admin
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;          //..product


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

Route::get('/admin/login',[AdminLoginController::class,'index'])->name('admin.login');





// Route::get('/',[FrontController::class,'index'])->name('Frontend.home'); //front UI show



//admin login Routes below...........
// Route::group(['prefix' => 'admin'],function(){

//    Route::group(['middleware' => 'admin.guest'],function(){
//        Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
//        Route::post('/authanticate',[AdminLoginController::class,'authanticate'])->name('admin.authanticate');

//     });

//    Route::group(['middlewere' => 'admin.auth'],function(){


//    });

//  });




Route::controller(DashboardController::class)->group(function() {
    Route::get('/r', 'index')-> name('dhome');
});


Route::controller(ProductController::class)->group(function() {
    Route::get('/t', 'index')-> name('layouts');
});



Route::resource('products', ProductController::class);



//mam er admin
Route::get('/admin', function () {
     return view('layout.master');
 });



Route::get('/test', function () {
    return view('products.test.newtest');
});

Route::get('/graph', function () {
    return view('products.test.graph');
});


