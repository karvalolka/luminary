<?php

use App\Http\Controllers\Admin\Fraction\{CreateFractionController,
    FractionController,
    ShowFractionController,
    StoreFractionController};
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
    });
});

Auth::routes();
