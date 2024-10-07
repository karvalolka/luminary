<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Armor;
use App\Models\AttackRate;
use App\Models\Fraction;
use App\Models\Grade;
use App\Models\Item;
use App\Models\ProtectionArea;
use App\Models\Race;
use App\Models\User;
use App\Models\Weapon;

class PersonalIndexController extends Controller
{
    public function __invoke()
    {
        if (!auth()->check()) {
            return redirect()->route('login'); // Перенаправление на страницу входа
        }

        return view('personal.main.index');
    }
}
