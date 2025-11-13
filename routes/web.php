<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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




// Route::get('/addproduct', function () {
//     return view('admin.addproduct');
// })->name('addproduct');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/admin/add-product', [ProductController::class, 'create'])->name('product.create');
Route::post('/admin/add-product', [ProductController::class, 'store'])->name('product.store');


Route::get('/admin/add-category', [ProductController::class, 'createcategory'])->name('product.category');










