<?php

use App\Http\Controllers\Admin\Entreprise\CreateController;
use App\Http\Controllers\Admin\Entreprise\DeleteController;
use App\Http\Controllers\Admin\Entreprise\EditController;
use App\Http\Controllers\Admin\Entreprise\ReadController;
use App\Http\Controllers\Admin\Entreprise\ShowController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/entreprises')->name('admin.entreprises.')->group(function (): void {
    Route::get('', ReadController::class)->name('read');
    Route::get('/create', [CreateController::class, 'create'])->name('create');
    Route::post('/create', [CreateController::class, 'store'])->name('store');
    Route::get('/{entreprise}/edit', [EditController::class, 'edit'])->name('edit');
    Route::put('/{entreprise}/edit', [EditController::class, 'update'])->name('update');
    Route::get('/{entreprise}', ShowController::class)->name('show');
    Route::delete('/{entreprise}', DeleteController::class)->name('delete');
});
