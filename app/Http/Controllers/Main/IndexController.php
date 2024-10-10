<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Char;

class IndexController extends Controller
{
    public function __invoke()
    {
        $chars = Char::where('user_id', auth()->id())->get();
        return view('main.index', compact('chars'));
    }
}
