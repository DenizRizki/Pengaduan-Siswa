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

// Route khusus user yang sudah login
Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Form pengaduan siswa
    Route::resource('form', FormController::class);

});

Route::middleware('auth')->group(function(){
    Route::resource('/guru', GuruController::class);
Route::get('/admin/pengaduan', [AdminController::class, 'index'])->name('admin.pengaduan');
Route::get('/admin/pengaduan/{id}', [AdminController::class, 'show'])->name('pengaduan.show');
Route::get('/admin/pengaduan/{id}/edit', [AdminController::class, 'edit'])->name('pengaduan.edit');
Route::put('/admin/pengaduan/{id}', [AdminController::class, 'update'])->name('pengaduan.update');
Route::post('/admin/pengaduan/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.updateStatus');

    })->name('laporan');
    Route::resource('pengaduan', AdminController::class);

// Route untuk admin (CRUD laporan/pengaduan)
Route::middleware(['auth'])->group(function () {
    // Route::resource('admin', AdminController::class);
});

require __DIR__ . '/auth.php';
