<?php

namespace App\Http\Controllers\Battle;

use App\Http\Controllers\Controller;
use App\Models\Char;
use Illuminate\Http\Request;

class BattleController extends Controller
{
    public function startBattle(Request $request, $attackerId)
    {
        $defenderId = $request->input('defenderId');
        $attacker = Char::find($attackerId);
        $defender = Char::find($defenderId);

        $battle = new Battle($attacker, $defender);
        $battleLog = $battle->battle();

        return view('battle.result', compact('attacker', 'defender', 'battleLog'));
    }
}
