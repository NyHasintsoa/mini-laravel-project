<?php

use App\Http\Controllers\Admin\Product\CreateController;
use App\Http\Controllers\Admin\Product\ReadController;
use App\Http\Controllers\Admin\Product\ShowController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/products')->name('admin.products.')->group(function(): void {
    Route::get('', ReadController::class)->name('read');
    Route::get('/create', CreateController::class)->name('create');
    Route::get('/{id}', ShowController::class)->name('show');
});
