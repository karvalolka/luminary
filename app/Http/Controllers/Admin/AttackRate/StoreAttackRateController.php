<?php

namespace App\Http\Controllers\Admin\AttackRate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AttackRate\StoreRequest;
use App\Models\AttackRate;

class StoreAttackRateController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        AttackRate::firstOrCreate($data);
        return redirect()->route('admin.attackRate.index');
    }
}
