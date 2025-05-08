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

// Route Home
// Route untuk Customer Index
Route::get('/customer', function () {
    return view('Pages.Customer.customer_index'); // Mengarah ke resources/views/Pages/Customer/customer_index.blade.php
})->name('customer.index');

// Route Dashboard (khusus user yang sudah login dan terverifikasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk melihat profil Jastiper (dengan ID dinamis)
Route::get('/jastiper/{id}', function ($id) {
    return view('jastiper.profile', ['id' => $id]);
})->name('jastiper.profile');

// Route untuk Search Jastiper
Route::get('/search', function () {
    return view('search'); // Mengarah ke resources/views/search.blade.php
})->name('search');

// Route Group yang membutuhkan login (auth)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk auth bawaan Laravel Breeze atau Fortify
require __DIR__.'/auth.php';
