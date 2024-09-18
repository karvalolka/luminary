<?php

namespace App\Http\Controllers\Admin\AttackRate;

use App\Http\Controllers\Controller;

class CreateAttackRateController extends Controller
{
    public function __invoke()
    {
        return view('admin.attackRate.create');
    }
}
