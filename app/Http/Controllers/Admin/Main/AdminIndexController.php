<?php

namespace App\Http\Controllers\Admin\Main;

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

class AdminIndexController extends Controller
{
    public function __invoke()
    {
        $data = [
            'usersCount' => User::count(),
            'racesCount' => Race::count(),
            'gradesCount' => Grade::count(),
            'fractionsCount' => Fraction::count(),
            'weaponsCount' => Weapon::count(),
            'armorsCount' => Armor::count(),
            'itemsCount' => Item::count(),
            'protectionAreasCount' => ProtectionArea::count(),
            'attackRatesCount' => AttackRate::count(),
        ];
        return view('admin.main.index', compact('data'));
    }
}
