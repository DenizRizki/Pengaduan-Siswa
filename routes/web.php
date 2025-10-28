<?php


use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

// User/siswa
Route::get('/', function () {
    return view('welcome');
});

// taruh route pengaduan di atas resource

// ini baru resource admin (buat CRUD lain)
Route::resource('admin', AdminController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    
});

// Admin
Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/pengaduan', AdminController::class);
    Route::resource('form', FormController::class);
      Route::get('/laporan', function () {
        return view('admin.laporan');
    })->name('laporan');
    Route::resource('/guru', GuruController::class);
});

require __DIR__.'/auth.php';
