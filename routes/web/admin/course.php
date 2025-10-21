<?php

use App\Http\Controllers\Admin\Course\CreateController;
use App\Http\Controllers\Admin\Course\DeleteController;
use App\Http\Controllers\Admin\Course\EditController;
use App\Http\Controllers\Admin\Course\ReadController;
use App\Http\Controllers\Admin\Course\ShowController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/courses')->name('admin.courses.')->group(function (): void {
    Route::get('', ReadController::class)->name('read');
    Route::get('/create', [CreateController::class, 'create'])->name('create');
    Route::post('/create', [CreateController::class, 'store'])->name('store');
    Route::get('/{course}/edit', [EditController::class, 'edit'])->name('edit');
    Route::put('/{course}/edit', [EditController::class, 'update'])->name('update');
    Route::get('/{course}', ShowController::class)->name('show');
    Route::delete('/{course}', DeleteController::class)->name('delete');
});
