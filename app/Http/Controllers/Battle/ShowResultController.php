<?php

namespace App\Http\Controllers\Battle;

use App\Http\Controllers\Controller;
use App\Models\Char;


class ShowResultController extends Controller
{
    public function __invoke($id)
    {
        $battle = Battle::find($id);
        return view('battle.result', compact('battle'));
    }
}
