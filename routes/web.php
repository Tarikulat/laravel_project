<?php
use App\Http\Controllers\{
    DashboardController,
    CategoryController,
    ProductController,

    LaporanController,
    MemberController,
    PengeluaranController,
    PembelianController,
    PembelianDetailController,
    PenjualanController,
    PenjualanDetailController,
    SettingController,
    SupplierController,
    UserController,
};

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\support\Str;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StripeController;          //strip
use App\Http\Controllers\PcartController;          //pcart


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
// route section

 Route::get('/', function () {
     return view('welcome');
 });

//............Tanvir start Router create below starting.......

//............Dashboard + Category start here..................
Route::group(['middleware' => 'auth'], function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'level:1'], function () {
Route::get('/category/data', [CategoryController::class, 'data'])->name('category.data');
Route::resource('/category', CategoryController::class);
//....................................................

//.............Product Route................................
Route::get('/product/data', [ProductController::class, 'data'])->name('product.data');
Route::post('/product/delete-selected', [ProductController::class, 'deleteSelected'])->name('product.delete_selected');
Route::post('/product/cetak-barcode', [ProductController::class, 'cetakBarcode'])->name('product.cetak_barcode');
Route::resource('/product', ProductController::class);
//.....................................................

});
});

//...............pcart Routes start....................
Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');
Route::get('/pcart', [PcartController::class, 'index']);
Route::get('cart', [PcartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [PcartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [PcartController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [PcartController::class, 'remove'])->name('remove_from_cart');
//......................................................



//.............Login Auth old.........................
Route::group(['prefix' => 'admin'],function(){
Route::group(['middleware' => 'admin.guest'],function(){
Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
Route::post('/authenticate',[AdminLoginController::class,'authenticate'])->name('admin.authenticate');
});
Route::group(['middleware' => 'admin.auth'],function(){
Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
Route::get('/logout',[HomeController::class,'logout'])->name('admin.logout');
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

//admin login Routes below old...........
Route::group(['prefix' => 'admin'],function(){
Route::group(['middleware' => 'admin.guest'],function(){
Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
Route::post('/authanticate',[AdminLoginController::class,'authanticate'])->name('admin.authanticate');
 });

Route::group(['middlewere' => 'admin.auth'],function(){
});
});
//..........................................................


// Route::get('/',[FrontController::class,'index'])->name('Frontend.home'); //front UI show

