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

        if (is_null($charId) || is_null($weaponId)) {
            return redirect()->back()->withErrors(['error' => 'Не указаны идентификаторы персонажа или оружия.']);
        }
        return $this->equipWeapon($charId, $weaponId, 'profile.show');
    }

    protected function equipWeapon(int $charId, int $weaponId, string $redirectRoute)
    {
        $char = Char::with('weapon')->find($charId);
        $weapon = Weapon::findOrFail($weaponId);
        $otherChar = Char::where('weapon_id', $weapon->id)->first();

        if ($otherChar && $otherChar->id !== $char->id) {
            $otherChar->weapon_id = null;
            $otherChar->save();
        }


        $char->weapon_id = $weapon->id;
        $char->save();

        return redirect()->route($redirectRoute, ['char' => $charId]);

    }

}
