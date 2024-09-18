<?php

namespace App\Http\Controllers\Admin\Weapon;

use App\Http\Controllers\Controller;
use App\Models\Weapon;

class ShowWeaponController extends Controller
{
    public function __invoke(Weapon $weapon)
    {
        return view('admin.weapon.show', compact('weapon'));
    }
}
