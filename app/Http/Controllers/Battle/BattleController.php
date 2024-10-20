<?php

namespace App\Http\Controllers\Battle;

use App\Http\Controllers\Controller;
use App\Models\Char;
use Illuminate\Http\Request;

class BattleController extends Controller
{
    public function startBattle(Request $request, $attackerId, $defenderId)
    {
        $request->validate([
            'attackerId' => 'required|exists:chars,id',
            'defenderId' => 'required|exists:chars,id',
        ]);

        $attacker = Char::find($attackerId);
        $defender = Char::find($defenderId);

        if (!$attacker || !$defender) {
            return redirect()->back()->withErrors('Персонажи не найдены.');
        }

        $battle = new Battle($attacker, $defender);
        $battleLog = $battle->battle();

        return view('battle.result', compact('attacker', 'defender', 'battleLog'));
    }
}
