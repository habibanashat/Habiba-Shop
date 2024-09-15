<?php


use App\Http\Controllesr\AdminController;
use App\Http\Controllers\AppController;
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
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AboutMe;
use App\Http\Controllers\ContactUs;


// use App\Http\Controllers\productDetails;


Route::get('/',[AppController::class,'index'])->name('app.index');
Route::get('/home',[AppController::class,'index'])->name('home.index');
Route::get('/about',[AboutMe::class,'index'])->name('about.index');
Route::get('/contact',[ContactUs::class,'index'])->name('contact.index');
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/product/{slug}',[ShopController::class,'productDetials'])->name('shop.product.details');
Route::get('/cart',[CartController::class,'index'])->name('cart.index');

Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');

Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::delete('/cart/clear',[CartController::class,'clearCart'])->name('cart.clear');

Route::get('/wishlist',[WishlistController::class,'addProductTowishlist'])->name('wishlist.store');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class,'index'])->name('user.index');
});

Route::middleware(['auth','auth.admin'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');

});

