<?php

namespace App\Http\Controllers;

use App\Http\Requests\Base\BaseCharStoreRequest;
use App\Models\Char;
use App\Models\Inventory;
use App\Models\Weapon;
use Illuminate\Http\Request;

class BaseCharController extends Controller
{
    const MAX_CHARS = 2;

    protected function createChar(BaseCharStoreRequest $request, string $redirectRoute)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        $characterCount = Char::where('user_id', $data['user_id'])->count();

        if ($characterCount >= self::MAX_CHARS) {
            return redirect()->back()->withErrors(['error' => 'Достигнуто максимальное количество персонажей (' . self::MAX_CHARS . ').']);
        }

        $char = Char::create($data);
        $inventory = new Inventory();
        $char->inventory()->save($inventory);

        return redirect()->route($redirectRoute);
    }

    public function equip(Request $request)
    {
        $charId = $request->input('char_id');
        $weaponId = $request->input('weapon_id');
        return $this->equipWeapon($charId, $weaponId, 'profile.index');
    }

    protected function equipWeapon(int $charId, int $weaponId, string $redirectRoute)
    {
        $char = Char::findOrFail($charId);
        $weapon = Weapon::findOrFail($weaponId);
        $char->weapon()->save($weapon);

        return redirect()->route($redirectRoute);
    }
}
