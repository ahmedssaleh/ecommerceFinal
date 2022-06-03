<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// Home comtroller

// login and register
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/at_login', [HomeController::class, 'at_login'])->name('at_login');

// register
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/save_register', [HomeController::class, 'save_register'])->name('save_register');
// logout
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');



// الصفحة الرئيسية
Route::get('/', [HomeController::class, 'index'])->name('home');
// عرض التفاصيل
Route::get('/show/{id}', [HomeController::class, 'show'])->name('show.producte');
// السلة
Route::post('/AddToCart/{id}', [HomeController::class, 'AddToCart'])->name('AddToCart')->middleware('auth');
Route::get('/showcart', [HomeController::class, 'showcart'])->name('showcart')->middleware('auth');
// Shop
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
//about us
Route::get('/about_us', [HomeController::class, 'about_us'])->name('about_us');

// contact
Route::get('/contact_us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::post('/contact_save', [HomeController::class, 'contact_save'])->name('contact_save');

// التعديل على عدد المنتجات
Route::get('/mor/{id}', [HomeController::class, 'mor'])->name('mor');
Route::get('/les/{id}', [HomeController::class, 'les'])->name('les');
