<?php

namespace App\Http\Controllers\Admin\AttackRate;

use App\Http\Controllers\Controller;
use App\Models\AttackRate;

class DeleteAttackRateController extends Controller
{
    public function __invoke(AttackRate $attackRate)
    {
        $attackRate->delete();
        return redirect()->route('admin.attackRate.index');
    }
}
