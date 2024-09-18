<?php

use App\Http\Controllers\Admin\AttackRate\{AttackRateController,
    CreateAttackRateController,
    DeleteAttackRateController,
    EditAttackRateController,
    ShowAttackRateController,
    StoreAttackRateController,
    UpdateAttackRateController};
use App\Http\Controllers\Admin\Item\{CreateItemController,
    DeleteItemController,
    EditItemController,
    ItemController,
    ShowItemController,
    StoreItemController,
    UpdateItemController};
use App\Http\Controllers\Admin\ProtectionArea\{CreateProtectionAreaController,
    DeleteProtectionAreaController,
    EditProtectionAreaController,
    ProtectionAreaController,
    ShowProtectionAreaController,
    StoreProtectionAreaController,
    UpdateProtectionAreaController};
use App\Http\Controllers\Admin\Armor\{ArmorController,
    CreateArmorController,
    DeleteArmorController,
    EditArmorController,
    ShowArmorController,
    StoreArmorController,
    UpdateArmorController
};
use App\Http\Controllers\Admin\Weapon\{CreateWeaponController,
    DeleteWeaponController,
    EditWeaponController,
    ShowWeaponController,
    StoreWeaponController,
    UpdateWeaponController,
    WeaponController
};
use App\Http\Controllers\Admin\User\{CreateUserController,
    DeleteUserController,
    EditUserController,
    ShowUserController,
    StoreUserController,
    UpdateUserController,
    UserController
};
use App\Http\Controllers\Admin\Race\{CreateRaceController,
    DeleteRaceController,
    EditRaceController,
    RaceController,
    ShowRaceController,
    StoreRaceController,
    UpdateRaceController
};

use App\Http\Controllers\Admin\Grade\{CreateGradeController,
    DeleteGradeController,
    EditGradeController,
    GradeController,
    ShowGradeController,
    StoreGradeController,
    UpdateGradeController
};

use App\Http\Controllers\Admin\Fraction\{CreateFractionController,
    DeleteFractionController,
    EditFractionController,
    FractionController,
    ShowFractionController,
    StoreFractionController,
    UpdateFractionController
};
use App\Http\Controllers\Admin\Main\AdminIndexController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, '__invoke']);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminIndexController::class, '__invoke'])->name('admin.main.index');
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
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, '__invoke'])->name('admin.user.index');
        Route::get('/create', [CreateUserController::class, '__invoke'])->name('admin.user.create');
        Route::post('/', [StoreUserController::class, '__invoke'])->name('admin.user.store');
        Route::get('/{user}', [ShowUserController::class, '__invoke'])->name('admin.user.show');
        Route::get('/{user}/edit', [EditUserController::class, '__invoke'])->name('admin.user.edit');
        Route::patch('/{user}', [UpdateUserController::class, '__invoke'])->name('admin.user.update');
        Route::delete('/{user}', [DeleteUserController::class, '__invoke'])->name('admin.user.delete');
    });
    Route::prefix('weapon')->group(function () {
        Route::get('/', [WeaponController::class, '__invoke'])->name('admin.weapon.index');
        Route::get('/create', [CreateWeaponController::class, '__invoke'])->name('admin.weapon.create');
        Route::post('/', [StoreWeaponController::class, '__invoke'])->name('admin.weapon.store');
        Route::get('/{weapon}', [ShowWeaponController::class, '__invoke'])->name('admin.weapon.show');
        Route::get('/{weapon}/edit', [EditWeaponController::class, '__invoke'])->name('admin.weapon.edit');
        Route::patch('/{weapon}', [UpdateWeaponController::class, '__invoke'])->name('admin.weapon.update');
        Route::delete('/{weapon}', [DeleteWeaponController::class, '__invoke'])->name('admin.weapon.delete');
    });
    Route::prefix('armor')->group(function () {
        Route::get('/', [ArmorController::class, '__invoke'])->name('admin.armor.index');
        Route::get('/create', [CreateArmorController::class, '__invoke'])->name('admin.armor.create');
        Route::post('/', [StoreArmorController::class, '__invoke'])->name('admin.armor.store');
        Route::get('/{armor}', [ShowArmorController::class, '__invoke'])->name('admin.armor.show');
        Route::get('/{armor}/edit', [EditArmorController::class, '__invoke'])->name('admin.armor.edit');
        Route::patch('/{armor}', [UpdateArmorController::class, '__invoke'])->name('admin.armor.update');
        Route::delete('/{armor}', [DeleteArmorController::class, '__invoke'])->name('admin.armor.delete');
    });
    Route::prefix('protectionArea')->group(function () {
        Route::get('/', [ProtectionAreaController::class, '__invoke'])->name('admin.protectionArea.index');
        Route::get('/create', [CreateProtectionAreaController::class, '__invoke'])->name('admin.protectionArea.create');
        Route::post('/', [StoreProtectionAreaController::class, '__invoke'])->name('admin.protectionArea.store');
        Route::get('/{protectionArea}', [ShowProtectionAreaController::class, '__invoke'])->name('admin.protectionArea.show');
        Route::get('/{protectionArea}/edit', [EditProtectionAreaController::class, '__invoke'])->name('admin.protectionArea.edit');
        Route::patch('/{protectionArea}', [UpdateProtectionAreaController::class, '__invoke'])->name('admin.protectionArea.update');
        Route::delete('/{protectionArea}', [DeleteProtectionAreaController::class, '__invoke'])->name('admin.protectionArea.delete');
    });
    Route::prefix('attackRate')->group(function () {
        Route::get('/', [AttackRateController::class, '__invoke'])->name('admin.attackRate.index');
        Route::get('/create', [CreateAttackRateController::class, '__invoke'])->name('admin.attackRate.create');
        Route::post('/', [StoreAttackRateController::class, '__invoke'])->name('admin.attackRate.store');
        Route::get('/{attackRate}', [ShowAttackRateController::class, '__invoke'])->name('admin.attackRate.show');
        Route::get('/{attackRate}/edit', [EditAttackRateController::class, '__invoke'])->name('admin.attackRate.edit');
        Route::patch('/{attackRate}', [UpdateAttackRateController::class, '__invoke'])->name('admin.attackRate.update');
        Route::delete('/{attackRate}', [DeleteAttackRateController::class, '__invoke'])->name('admin.attackRate.delete');
    });
    Route::prefix('item')->group(function () {
        Route::get('/', [ItemController::class, '__invoke'])->name('admin.item.index');
        Route::get('/create', [CreateItemController::class, '__invoke'])->name('admin.item.create');
        Route::post('/', [StoreItemController::class, '__invoke'])->name('admin.item.store');
        Route::get('/{item}', [ShowItemController::class, '__invoke'])->name('admin.item.show');
        Route::get('/{item}/edit', [EditItemController::class, '__invoke'])->name('admin.item.edit');
        Route::patch('/{item}', [UpdateItemController::class, '__invoke'])->name('admin.item.update');
        Route::delete('/{item}', [DeleteItemController::class, '__invoke'])->name('admin.item.delete');
    });
});

Auth::routes();
