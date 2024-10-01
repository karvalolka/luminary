<?php

namespace App\Http\Controllers\Admin\AttackRate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AttackRate\UpdateRequest;
use App\Models\AttackRate;

class UpdateAttackRateController extends Controller
{
    public function __invoke(UpdateRequest $request, AttackRate $attackRate)
    {
        $data = $request->validated();
        $attackRate->update($data);
        return view('admin.attackRate.show', compact('attackRate'));
    }
}
