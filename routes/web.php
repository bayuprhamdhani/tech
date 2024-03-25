<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Coba;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
 
Route::get('/Coba/{nama2}/test', [Coba::class, 'Tes']);

Route::resource('product', ProductController::class);
Route::resource('users', UserController::class);
Route::get('index', [RuangController::class, 'indexPage'])->name('ruangan.page');
Route::get('/dashboard', [AuthController::class,'dashboard'])->name('dashboard');
//Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('welcome');
});

