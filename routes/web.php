<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SubtypeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/type/{id}', [TypeController::class, 'show'])->name('type.show');
Route::get('/items/{id}', [ItemController::class, 'show'])->name('items.show');
Route::get('/subtype/{id}', [SubtypeController::class, 'show'])->name('subtype.show');
Route::get('/item/{id}', [ItemController::class, 'info'])->name('items.info');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
