<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Weapon;
use Illuminate\Http\Request;

class EquipWeaponController extends Controller
{
    public function equip(Request $request, Char $char)
    {

        $request->validate([
            'weapon_id' => 'required|exists:weapons,id',
        ]);


        $weapon = Weapon::findOrFail($request->weapon_id);

        if ($char->user_id !== auth()->id()) {
            return redirect()->back()->withErrors(['error' => 'Вы не можете экипировать это оружие.']);
        }


        $char->weapon_id = $weapon->id;
        $char->save();

        return redirect()->route('profile.show', $char->id);
    }
}
