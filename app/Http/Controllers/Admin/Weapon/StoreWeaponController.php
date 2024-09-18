<?php

namespace App\Http\Controllers\Admin\Weapon;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Weapon\StoreRequest;
use App\Models\Weapon;

class StoreWeaponController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Weapon::firstOrCreate($data);
        return redirect()->route('admin.weapon.index');
    }
}
