<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\BaseCharController;
use App\Http\Requests\Base\BaseCharStoreRequest;

class StoreCharController extends BaseCharController
{
    public function __invoke(BaseCharStoreRequest $request)
    {
        $weaponId = $request->input('weapon_id');
        return $this->createChar($request, 'admin.char.index', $weaponId);
    }
}
