<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;

class CharController extends Controller
{
    public function __invoke()
    {
        $chars = Char::where('user_id', auth()->id())
            ->get();
        return view('personal.char.index', compact('chars'));
    }
}
