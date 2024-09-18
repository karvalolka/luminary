<?php

namespace App\Http\Controllers\Admin\Weapon;

use App\Http\Controllers\Controller;
use App\Models\AttackRate;

class CreateWeaponController extends Controller
{
    public function __invoke()
    {
        $attackRates = AttackRate::all();
        return view('admin.weapon.create', compact('attackRates'));
    }
}
