<?php

namespace App\Http\Controllers\Admin\Weapon;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Weapon\UpdateRequest;
use App\Models\Weapon;
use Illuminate\Support\Facades\Storage;

class UpdateWeaponController extends Controller
{
    public function __invoke(UpdateRequest $request, Weapon $weapon)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        } else {
            unset($data['image']);
        }
        $weapon->update($data);
        return view('admin.weapon.show', compact('weapon'));
    }
}
