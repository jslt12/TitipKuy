<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini adalah tempat Anda mendaftarkan web routes untuk aplikasi Anda.
| Semua route ini dimuat oleh RouteServiceProvider dan diberikan middleware "web".
|
*/

Route::get('/', function () {
    return view('Pages.Landing.landingpage');
})->name('landingppage');

Route::get('/admin', function () {
    return view('Pages.Admin.dashboard');
});

Route::get('/jastiper', function () {
    return view('Pages.Justiper.jastiper');
});

Route::get('/admin/reports', function () {
    return view('Pages.Admin.laporan');
});
Route::get('/admin/users', function () {
    return view('Pages.Admin.manajemen-user');
});



Route::get('/customer', function () {
    return view('Pages.Customer.customer'); 
})->name('customer');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route Group yang membutuhkan login (auth)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk auth bawaan Laravel Breeze atau Fortify
require __DIR__.'/auth.php';
