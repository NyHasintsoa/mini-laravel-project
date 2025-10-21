<?php

use App\Http\Controllers\Admin\Book\CreateController;
use App\Http\Controllers\Admin\Book\DeleteController;
use App\Http\Controllers\Admin\Book\EditController;
use App\Http\Controllers\Admin\Book\ReadController;
use App\Http\Controllers\Admin\Book\ShowController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/books')->name('admin.books.')->group(function (): void {
    Route::get('', ReadController::class)->name('read');
    Route::get('/create', [CreateController::class, 'create'])->name('create');
    Route::post('/create', [CreateController::class, 'store'])->name('store');
    Route::get('/{book}/edit', [EditController::class, 'edit'])->name('edit');
    Route::put('/{book}/edit', [EditController::class, 'update'])->name('update');
    Route::get('/{book}', ShowController::class)->name('show');
    Route::delete('/{book}', DeleteController::class)->name('delete');
});
