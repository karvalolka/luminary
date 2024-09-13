<?php

use App\Http\Controllers\Admin\Race\{CreateRaceController,
    DeleteRaceController,
    EditRaceController,
    RaceController,
    ShowRaceController,
    StoreRaceController,
    UpdateRaceController};

use App\Http\Controllers\Admin\Grade\{CreateGradeController,
    DeleteGradeController,
    EditGradeController,
    GradeController,
    ShowGradeController,
    StoreGradeController,
    UpdateGradeController};

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
    Route::prefix('grade')->group(function () {
        Route::get('/', [GradeController::class, '__invoke'])->name('admin.grade.index');
        Route::get('/create', [CreateGradeController::class, '__invoke'])->name('admin.grade.create');
        Route::post('/', [StoreGradeController::class, '__invoke'])->name('admin.grade.store');
        Route::get('/{grade}', [ShowGradeController::class, '__invoke'])->name('admin.grade.show');
        Route::get('/{grade}/edit', [EditGradeController::class, '__invoke'])->name('admin.grade.edit');
        Route::patch('/{grade}', [UpdateGradeController::class, '__invoke'])->name('admin.grade.update');
        Route::delete('/{grade}', [DeleteGradeController::class, '__invoke'])->name('admin.grade.delete');
    });
    Route::prefix('race')->group(function () {
        Route::get('/', [RaceController::class, '__invoke'])->name('admin.race.index');
        Route::get('/create', [CreateRaceController::class, '__invoke'])->name('admin.race.create');
        Route::post('/', [StoreRaceController::class, '__invoke'])->name('admin.race.store');
        Route::get('/{race}', [ShowRaceController::class, '__invoke'])->name('admin.race.show');
        Route::get('/{race}/edit', [EditRaceController::class, '__invoke'])->name('admin.race.edit');
        Route::patch('/{race}', [UpdateRaceController::class, '__invoke'])->name('admin.race.update');
        Route::delete('/{race}', [DeleteRaceController::class, '__invoke'])->name('admin.race.delete');
    });
});

Auth::routes();
