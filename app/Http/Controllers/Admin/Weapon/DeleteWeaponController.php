<?php

namespace App\Http\Controllers\Admin\Weapon;

use App\Http\Controllers\Controller;
use App\Models\Weapon;

class DeleteWeaponController extends Controller
{
    public function __invoke(Weapon $weapon)
    {
        $weapon->delete();
        return redirect()->route('admin.weapon.index');
    }
}
