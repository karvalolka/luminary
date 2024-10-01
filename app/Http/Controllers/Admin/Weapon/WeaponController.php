<?php

namespace App\Http\Controllers\Admin\Weapon;

use App\Http\Controllers\Controller;
use App\Models\Weapon;

class WeaponController extends Controller
{
    public function __invoke()
    {
        $weapons = Weapon::all();
        return view('admin.weapon.index', compact('weapons'));
    }
}
