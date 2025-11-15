<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SizeController;

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
    return view('/home');
});


route ::get('/about',function (){
    return view('about');
});

route ::get('/cartpage',function (){
    return view('cart-page');
});

route ::get('/checkout',function (){
    return view('checkout');
});

route ::get('/collectioncategory',function (){
    return view('collection-category');
});



route ::get('/order',function (){
    return view('order');
});

route ::get('/payment',function (){
    return view('payment');
});

route ::get('/product',function (){
    return view('product');
});

route ::get('/register',function (){
    return view('register');
});

route ::get('/whistlist',function (){
    return view('whistlist');
});


Route::get('/sign-up', [AuthController::class, 'showsignup'])->name('signup');

Route::post('/sign-up', [AuthController::class, 'signup']);


Route::get('/signin', [AuthController::class, 'signin'])->name('signin');

Route::post('/signin', [AuthController::class, 'authenticate'])->name('signin');


Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');



Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// product routes
Route::get('/admin/add-product', [ProductController::class, 'create'])->name('product.create');
Route::post('/admin/add-product', [ProductController::class, 'store'])->name('product.store');





// category routes
Route::get('/admin/add-category', [CategoryController::class, 'create'])->name('product.category');
 Route::post('/admin/categories', [CategoryController::class, 'store'])->name('category.store');
 Route::get('/admin/categories', [CategoryController::class, 'categorylist'])->name('category.list');


//  image routes

Route::get('images', [ImageController::class, 'index']);
Route::post('images', [ImageController::class, 'store']);

// color routes

Route::get('product-colors', [ColorController::class, 'index']);
Route::post('product-colors', [ColorController::class, 'store']);

// size routes

Route::get('sizes', [SizeController::class, 'index']);
Route::post('sizes', [SizeController::class, 'store']);












