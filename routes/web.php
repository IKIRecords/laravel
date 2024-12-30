<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PersonalController;

Route::get('/', [PersonalController::class, 'index']);



Route::get('/personal', function () {
    return view('front.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::
// ('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// Route::resource('categories', CategoryController::class);
// Route::resource('barangs', BarangController::class);
// Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');


// routes/web.php
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}/show', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');


Route::get('/barangs/create', [BarangController::class, 'create'])->name('barangs.create');
Route::get('/barangs/{id}/edit', [BarangController::class, 'edit'])->name('barangs.edit');

require __DIR__.'/auth.php';
