<?php

namespace App\Http\Controllers\Admin\Weapon;

use App\Http\Controllers\Controller;
use App\Models\AttackRate;
use App\Models\Weapon;

class EditWeaponController extends Controller
{
    public function __invoke(Weapon $weapon)
    {
        $attackRates = AttackRate::all();
        return view('admin.weapon.edit', compact('weapon', 'attackRates'));
    }
}
