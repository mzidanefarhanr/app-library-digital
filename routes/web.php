<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/books', [BukuController::class, 'index'])->name('books');
    Route::patch('/books', [BukuController::class, 'update'])->name('books.update');
    Route::delete('/books', [BukuController::class, 'destroy'])->name('books.delete');

    Route::get('/borrows', [PeminjamanController::class, 'index'])->name('borrows');
    Route::patch('/borrows', [PeminjamanController::class, 'update'])->name('borrows.update');
    Route::delete('/borrows', [PeminjamanController::class, 'destroy'])->name('borrows.delete');
});

require __DIR__.'/auth.php';
