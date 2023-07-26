<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
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


//For testing purpose
// Route::get('/test', [RouteController::class, 'testJoin']);



Route::view('/dashboard', 'Admin.dashboard')->name('dashboard')->middleware('adminauth');

Route::view('admin/add-category', 'Admin.addcategory')->middleware('adminauth');

Route::view('admin/add-product','Admin.addProduct')->middleware('adminauth');

Route::get('/admin', [AdminController::class, 'adminLogin'])->name('adminLoginPage');

Route::post('/admin', [AdminController::class, 'adminAuthenticate'])->name('adminAuthenticate');

Route::get('/admin_registration', [AdminController::class, 'adminSignup'])->name('adminSignup');

Route::post('/admin_registration', [AdminController::class, 'AdminRegistrationConfirm']);

Route::get('/adminLogout', [AdminController::class, 'adminLogout'])->name('adminLogout');



Route::get('/', [RouteController::class, 'homePage'])->name('home');



// Route::view('/preloader', 'preloader');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'registrationConfirm'])->name('register');

Route::get('/login', [UserController::class, 'loginPageView'])->name('login');

Route::post('/login', [UserController::class, 'authentication'])->name('login');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('profile/{id}', [UserController::class, 'myprofile'])->name('profile');

Route::post('/profile/{id}', [UserController::class, 'editprofile']);

Route::get('checkout', [UserController::class, 'checkout'])->name('checkout');

Route::post('checkoutDefaultAddress', [UserController::class, 'checkoutDefaultAddress']);

Route::post('checkoutDeliveryAddress', [UserController::class, 'checkoutDeliveryAddress']);
Route::get('showcheckoutDeliveryAddress', [UserController::class, 'showcheckoutDeliveryAddress']);



Route::post('/add_product', [ProductController::class, 'addProduct']);

Route::get('/mensShirt', [ProductController::class, 'viewMensShirt'])->name('viewMensShirt');

Route::get('/mensTshirt', [ProductController::class, 'viewMensTshirt'])->name('viewMensTshirt');

Route::get('/sarees', [ProductController::class, 'viewSarees'])->name('viewSarees');

Route::get('/productView/{id}', [ProductController::class, 'viewProduct'])->name('viewProduct');

Route::get('productView/add_to_cart/{id}', [ProductController::class, 'addToCart']);
Route::get('add_to_cart1/{id}', [ProductController::class, 'addToCart1']);

Route::get('/cart', [ProductController::class, 'cartView']);

Route::get('/delete_cart_item/{id}',[ProductController::class, 'deleteCartItem'])->name('deleteItem');

Route::get('/decrease_quantity/{id}', [ProductController::class, 'decreaseQuantity']);

