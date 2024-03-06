<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
use App\Http\Controllers\Coba;
 
Route::get('/Coba/{nama2}/test', [Coba::class, 'Tes']);

Route::get('/tech', [HaiController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
