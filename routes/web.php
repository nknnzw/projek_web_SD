<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sdController;
use App\Http\Controllers\TableController;



Route::get('/', function () {
    return view('main');
});
Route::get('/home', function () {
    return view('main');
});
Route::get('/dash', function () {
    return view('adminn');
});

Route::middleware('auth')->group(function () {
    Route::get('dash', function () {
        return view('adminn');
    })->name("dashboard");
});


Route::controller(sdController::class)->group(function () {
    Route::get('/tabelGuru', 'tableGuru')->name('tabelGuru');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

//register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

//logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::get('/tabelGuru', [TableController::class, 'tableGuru'])->name('tabelGuru');
Route::post('/storeGuru', [TableController::class, 'storeGuru'])->name('storeGuru');
Route::delete('/delete-guru/{post}', [TableController::class, 'deleteGuru'])->name('delete-guru');
Route::put('/update-guru/{post}', [TableController::class, 'updateGuru'])->name('update-guru');
//Route::get('/edit-guru/{post}', [TableController::class, 'editGuru'])->name('edit-guru');