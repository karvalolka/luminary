<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\BaseCharController;
use App\Http\Requests\Base\BaseCharStoreRequest;

class StoreCharController extends BaseCharController
{
    public function __invoke(BaseCharStoreRequest $request)
    {
        $charId = $request->input('char_id');

        if ($charId) {
            $weaponId = $request->input('weapon_id');
            return $this->equipWeapon($charId, $weaponId, 'personal.char.index');
        }

        return $this->createChar($request, 'personal.char.index');
    }
}
