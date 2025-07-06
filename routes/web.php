<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SubtypeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/type/{id}', [TypeController::class, 'show'])->name('type.show');
Route::get('/items/{id}', [ItemController::class, 'show'])->name('items.show');
Route::get('/subtype/{id}', [SubtypeController::class, 'show'])->name('subtype.show');
Route::get('/item/{id}', [ItemController::class, 'info'])->name('items.info');


Route::get('/dashboard', [AdminController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ✅ MOVE THESE ABOVE /items/{id}
    Route::get('/create', [ItemController::class, 'create'])->name('items.create');
    Route::post('/items', [ItemController::class, 'store'])->name('items.store');
    Route::get('/items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');
    Route::put('/items/{item}', [ItemController::class, 'update'])->name('items.update');
    Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');

    Route::get('/items/category/{id}', [ItemController::class, 'showByCategory'])->name('items.category');
    Route::get('/items/{id}', [ItemController::class, 'show'])->name('items.show');
    
Route::get('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/update', [AdminController::class, 'update'])->name('admin.update');

});

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['hr', 'en', 'de'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');



require __DIR__.'/auth.php';
