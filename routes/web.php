<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PrestasiController;




// Route::get('/', function () {
//     return view('main');
// });
// Route::get('/home', function () {
//     return view('main');
// });
Route::resource('/', \App\Http\Controllers\HomeController::class);



Route::get('/dash', function () {
    return view('adminn');
});


Route::middleware('auth')->group(function () {
    Route::get('dash', function () {
        return view('adminn');
    })->name("dashboard");
});


// Route::controller(TableController::class)->group(function () {
//     Route::get('/tabelGuru', 'tableGuru')->name('tabelGuru');
//     Route::get('/tabelGuru/add', 'createGuru')->name('tabelGuru-add');
//     Route::post('/storeGuru', 'storeGuru')->name('storeGuru');
//     Route::delete('/delete-guru/{post}', 'deleteGuru')->name('delete-guru');
//     Route::post('/update-guru/{post}', 'updateGuru')->name('update-guru');
// });
Route::resource('/tabelGuru', \App\Http\Controllers\TableController::class);


Route::get('/data-extras', [ExtraController::class, 'index'])->name('extra.index');
Route::get('/create-extras', [ExtraController::class, 'create'])->name('extra.create');
Route::post('/extras', [ExtraController::class, 'store'])->name('extra.store');
Route::get('/extras/{extra}/edit', [ExtraController::class, 'edit'])->name('extra.edit');
Route::put('/extras/{extra}/update', [ExtraController::class, 'update'])->name('extra.update');
Route::delete('/extras/{extra}', [ExtraController::class, 'destroy'])->name('extra.destroy');
Route::get('/extras/{extra}', [ExtraController::class, 'show'])->name('extra.show');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

//register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

//logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::resource('struktur', StrukturController::class);



Route::resource('jadwal', JadwalController::class);
Route::resource('kegiatan', KegiatanController::class);
Route::resource('prestasi', PrestasiController::class);


//Route::get('ekstra/ekstraa', [ekstraController::class, 'ekstraa'])->name('ekstra.ekstraa');
//Route::post('ekstra', [ekstraController::class, 'store'])->name('ekstra.store');
//Route::get('ekstraa', [ekstraController::class, 'index'])->name('ekstraa.index');




// Route::get('/tabelGuru', [TableController::class, 'tableGuru'])->name('tabelGuru');
// Route::post('/storeGuru', [TableController::class, 'storeGuru'])->name('storeGuru');
// Route::delete('/delete-guru/{post}', [TableController::class, 'deleteGuru'])->name('delete-guru');
// Route::put('/update-guru/{post}', [TableController::class, 'updateGuru'])->name('update-guru');
//Route::get('/edit-guru/{post}', [TableController::class, 'editGuru'])->name('edit-guru');