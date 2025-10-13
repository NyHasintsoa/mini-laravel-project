<?php

use App\Http\Controllers\Admin\User\CreateController;
use App\Http\Controllers\Admin\User\ReadController;
use App\Http\Controllers\Admin\User\ShowController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/users')->name('admin.users.')->group(function (): void {
    Route::get('', ReadController::class)->name('read');
    Route::get('/create', CreateController::class)->name('create');
    Route::get('/{user}', ShowController::class)->name('show');
});
