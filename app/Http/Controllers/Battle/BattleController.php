<?php

namespace App\Http\Controllers\Battle;

use App\Http\Controllers\Controller;
use App\Models\Char;

class BattleController extends Controller
{
    public function startBattle($attackerId, $defenderId)
    {
        $attacker = Char::find($attackerId);
        $defender = Char::find($defenderId);

        if (!$attacker || !$defender) {
            return redirect()->back()->withErrors('Персонажи не найдены.');
        }

        $battle = new Battle($attacker, $defender);
        $battle->battle();

        return view('battle', compact('attacker', 'defender'));
    }
}
