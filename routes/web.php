<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\SingleProductController;

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


// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// Rute Admin
Route::get('/dashboard', [AdminController::class, 'index'])->name('adminHome')->middleware('auth');


// User Biasa
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/confirmation', [ConfirmationController::class, 'index'])->name('confirmation');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/tracking', [TrackingController::class, 'index'])->name('tracking');
Route::get('/single-product', [SingleProductController::class, 'index'])->name('single-product');
