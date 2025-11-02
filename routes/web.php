<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

// Halaman awal (user/siswa)
Route::get('/', function () {
    return view('welcome');
});

// Dashboard utama (sudah dinamai dengan benar)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Form pengaduan siswa
Route::resource('form', FormController::class);

// Route khusus user yang sudah login
Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

Route::middleware('auth')->group(function(){
    Route::resource('/guru', GuruController::class);
    Route::get('/detail', function () {
        return view('admin.detail_laporan');
    })->name('laporan');
    Route::post('/detail', function () {
        return view('admin.detail_laporan');
    })->name('laporan');
    Route::resource('pengaduan', AdminController::class);
});

// Route untuk admin (CRUD laporan/pengaduan)
Route::middleware(['auth'])->group(function () {
    // Route::resource('admin', AdminController::class);
});

require __DIR__ . '/auth.php';
