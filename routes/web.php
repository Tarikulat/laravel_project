<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminLoginController;
// use App\Http\Controllers\DashboardController;

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


//admin login Routes...........


Route::group(['prefix' => 'admin'],function(){

    Route::group(['middleware' => 'admin.guest'],function(){
        Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
        Route::post('/authanticate',[AdminLoginController::class,'authanticate'])->name('admin.authanticate');

    });

    Route::group(['middlewere' => 'admin.auth'],function(){


    });

});




// Route::controller(DashboardController::class)->group(function() {
//     Route::get('/r', 'd')-> name('dheader');
// });




