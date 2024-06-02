<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sdController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('main');
});
Route::get('/home', function () {
    return view('main');
});
Route::get('/dash', function () {
    return view('adminn');
});
Route::controller(sdController::class)->group(function() {
    Route::get('/tabelGuru', 'tableGuru')->name('tabelGuru');
});

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticate'])->name('auth.authenticate');

//register
Route::get('/register', [AuthController::class,'register'])->name('auth.register');
Route::post('/register', [AuthController::class,'store'])->name('auth.store');

//logout
Route::post('/logout', [AuthController::class,'logout'])->name('auth.logout');
