<?php

use App\Http\Controllers\Admin\Entreprise\CreateController;
use App\Http\Controllers\Admin\Entreprise\ReadController;
use App\Http\Controllers\Admin\Entreprise\ShowController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/entreprises')->name('admin.entreprises.')->group(function(): void {
    Route::get('', ReadController::class)->name('read');
    Route::get('/create', CreateController::class)->name('create');
    Route::get('/{id}', ShowController::class)->name('show');
});
