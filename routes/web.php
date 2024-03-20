<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Coba;
 
Route::get('/Coba/{nama2}/test', [Coba::class, 'Tes']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
//Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('/', function () {
    return view('welcome');
});

