<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});

Route::view('notes', 'notes.index')->middleware(['auth'])->name('notes.index');
Route::view('notes/create', 'notes.create')->middleware(['auth'])->name('notes.create');
Route::view('notes/{id}/edit', 'notes.edit')->middleware(['auth'])->name('notes.edit');

require __DIR__ . '/auth.php';
