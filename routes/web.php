<?php

use App\Http\Controllers\Admin\Main\AdminIndexController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, '__invoke']);

Route::prefix('admin')->group(function (){
    Route::get('/', [AdminIndexController::class, '__invoke']);
});

Auth::routes();
