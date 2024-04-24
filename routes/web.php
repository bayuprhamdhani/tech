<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Coba;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\PurchasingController;


Route::get('/Coba/{nama2}/test', [Coba::class, 'Tes']);

Route::controller(UserController::class)->group(function(){
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');
});

Route::resource('purchase', PurchasingController::class);
Route::get('create-purchase', [PurchasingController::class,'create'])->name('purchase.create');
Route::post('store-purchase', [PurchasingController::class,'store'])->name('purchase.store');
Route::get('edit-purchase', [PurchasingController::class,'edit'])->name('purchase.edit');

Route::resource('selling', SellingController::class);
Route::get('create-selling', [SellingController::class,'create'])->name('selling.create');
Route::post('store-selling', [SellingController::class,'store'])->name('selling.store');
Route::get('edit-selling', [SellingController::class,'edit'])->name('selling.edit');
Route::resource('product', ProductController::class);
Route::get('create-product', [ProductController::class,'create'])->name('product.create');
Route::post('store-product', [ProductController::class,'store'])->name('product.store');
Route::get('edit-product', [ProductController::class,'edit'])->name('product.edit');
Route::resource('users', UserController::class);
Route::get('create-user', [UserController::class,'create'])->name('users.create');
Route::post('store-user', [UserController::class,'store'])->name('users.store');
Route::get('edit-user', [UserController::class,'edit'])->name('users.edit');
Route::get('index', [RuangController::class, 'indexPage'])->name('ruangan.page');
Route::get('dashboard', [AuthController::class,'dashboard'])->name('dashboard');
Route::get('calendar', [AuthController::class,'calendar'])->name('calendar');
Route::get('profile', [AuthController::class,'profile'])->name('profile');
Route::get('test', [AuthController::class,'test'])->name('test');
//Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'index2'])->name('login');
Route::get('index', [AuthController::class, 'index2'])->name('login2');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('welcome');
});

