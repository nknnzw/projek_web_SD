<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sdController;

Route::get('/', function () {
    return view('main');
});
Route::get('home', function () {
    return view('main');
});
Route::get('dash', function () {
    return view('adminn');
});
Route::controller(sdController::class)->group(function() {
    Route::get('/tabelGuru', 'tableGuru')->name('tabelGuru');
});
Route::get('login', function () {
    return view('loginAdmin');
});