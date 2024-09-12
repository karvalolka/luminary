<?php

use App\Http\Controllers\Admin\Fraction\{CreateFractionController,
    DeleteFractionController,
    EditFractionController,
    FractionController,
    ShowFractionController,
    StoreFractionController,
    UpdateFractionController};
use App\Http\Controllers\Admin\Main\AdminIndexController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, '__invoke']);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminIndexController::class, '__invoke']);
    Route::prefix('fraction')->group(function () {
        Route::get('/', [FractionController::class, '__invoke'])->name('admin.fraction.index');
        Route::get('/create', [CreateFractionController::class, '__invoke'])->name('admin.fraction.create');
        Route::post('/', [StoreFractionController::class, '__invoke'])->name('admin.fraction.store');
        Route::get('/{fraction}', [ShowFractionController::class, '__invoke'])->name('admin.fraction.show');
        Route::get('/{fraction}/edit', [EditFractionController::class, '__invoke'])->name('admin.fraction.edit');
        Route::patch('/{fraction}', [UpdateFractionController::class, '__invoke'])->name('admin.fraction.update');
        Route::delete('/{fraction}', [DeleteFractionController::class, '__invoke'])->name('admin.fraction.delete');
    });
});

Auth::routes();
