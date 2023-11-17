<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminLoginController;   //..login
use App\Http\Controllers\admin\HomeController; //admindashboard home
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Http\Request;
use Illuminate\support\Str;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;          //..product

use App\Http\Controllers\StripeController;
use App\Http\Controllers\PcartController;


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

//....Tanvir start Router create below.......


Route::group(['prefix' => 'admin'],function(){

Route::group(['middleware' => 'admin.guest'],function(){
    Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
    Route::post('/authenticate',[AdminLoginController::class,'authenticate'])->name('admin.authenticate');

});
Route::group(['middleware' => 'admin.auth'],function(){
Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
Route::get('/logout',[HomeController::class,'logout'])->name('admin.logout');


    //..............Category Routes................
 Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
 Route::get('/categories',[CategoryController::class,'store'])->name('categories.store');
 Route::get('/getSlug',[CategoryController::class,'create'])->name('categories.create');


Route::get('/getSlug',function(Request $request){
    if (!empty($request->title)) {
        $slug = Str::slug($request->title);
    }
    return response()->json([
        'status' => true,
        'slug' => $slug
    ]);

})->name('getSlug');


});

});


//........pcart Routes..................

Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

Route::get('/pcart', [PcartController::class, 'index']);
Route::get('cart', [PcartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [PcartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [PcartController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [PcartController::class, 'remove'])->name('remove_from_cart');
//........pcart routes end..................



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



//mam er admin below..........
Route::get('/admin', function () {
     return view('layout.master');
 });



Route::get('/test', function () {
    return view('products.test.newtest');
});

Route::get('/graph', function () {
    return view('products.test.graph');
});


