<?php

namespace App\Http\Controllers\Admin\AttackRate;

use App\Http\Controllers\Controller;
use App\Models\AttackRate;

class ShowAttackRateController extends Controller
{
    public function __invoke(AttackRate $attackRate)
    {
        return view('admin.attackRate.show', compact('attackRate'));
    }
}
