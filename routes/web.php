<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::redirect('/', '/digilib/login');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');