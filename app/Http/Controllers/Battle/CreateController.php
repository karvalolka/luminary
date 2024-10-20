<?php

namespace App\Http\Controllers\Battle;

use App\Http\Controllers\Controller;
use App\Models\Char;


class CreateController extends Controller
{
    public function __invoke($attackerId)
    {
        $chars = Char::all();
        $selectedAttacker = Char::find($attackerId);
        return view('battle.create', compact('chars', 'selectedAttacker'));
    }
}
