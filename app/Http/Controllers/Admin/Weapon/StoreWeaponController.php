<?php

namespace App\Http\Controllers\Admin\Weapon;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Weapon\StoreRequest;
use App\Models\Weapon;
use Illuminate\Support\Facades\Storage;

class StoreWeaponController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Weapon::firstOrCreate($data);
        return redirect()->route('admin.weapon.index');
    }
}
