<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
// use App\Http\Controllers\Admin\ProductController\ProductController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\SingleProductController;
use App\Http\Controllers\Admin\KategoriController;

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
// User Biasa

Route::get(
    '/',
    [HomeController::class, 'index']
)->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/single-product', [SingleProductController::class, 'index'])->name('single-product');


// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Admin
// Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', [AdminController::class, 'index'])->name('adminHome');
Route::get('/product', [ProductController::class, 'index'])->name('adminProduct');
Route::get('/product/get', [ProductController::class, 'getProduct'])->name('getProduct');
Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('delProduct');
Route::get('/product/create', [ProductController::class, 'create'])->name('createProduct');
Route::post('/product/save', [ProductController::class, 'save'])->name('storeProduct');
// });
Route::get('/pelanggan', [UserController::class, 'index'])->name('adminUser');
Route::get('/pelanggan/get', [UserController::class, 'getProduct'])->name('getUser');
Route::delete('pelanggan/{id}', [UserController::class, 'destroy'])->name('delUser');
Route::get('/pelanggan/create', [UserController::class, 'create'])->name('createUser');
Route::post('/pelanggan/save', [UserController::class, 'save'])->name('storeUser');

Route::get('/adminKategori', [KategoriController::class, 'index'])->name('adminKategori');
Route::get('/adminKategori/get', [KategoriController::class, 'getProduct'])->name('getKategori');
Route::delete('adminKategori/{id}', [KategoriController::class, 'destroy'])->name('delKategori');
Route::get('/adminKategori/create', [KategoriController::class, 'create'])->name('createKategori');
Route::post('/adminKategori/save', [KategoriController::class, 'save'])->name('storeKategori');

//User Login
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::get('/confirmation', [ConfirmationController::class, 'index'])->name('confirmation');
    Route::get('/tracking', [TrackingController::class, 'index'])->name('tracking');
});