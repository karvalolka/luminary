<?php

namespace App\Http\Controllers\Admin\Weapon;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Weapon\UpdateRequest;
use App\Models\Weapon;

class UpdateWeaponController extends Controller
{
    public function __invoke(UpdateRequest $request, Weapon $weapon)
    {
        $data = $request->validated();
        $weapon->update($data);
        return view('admin.weapon.show', compact('weapon'));
    }
}
