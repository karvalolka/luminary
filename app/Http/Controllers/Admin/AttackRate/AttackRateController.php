<?php

namespace App\Http\Controllers\Admin\AttackRate;

use App\Http\Controllers\Controller;
use App\Models\AttackRate;

class AttackRateController extends Controller
{
    public function __invoke()
    {
        $attackRates = AttackRate::all();
        return view('admin.attackRate.index', compact('attackRates'));
    }
}
