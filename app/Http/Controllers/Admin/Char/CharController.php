<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;

class CharController extends Controller
{
    public function __invoke()
    {
        $chars = Char::all();
        return view('admin.char.index', compact('chars'));
    }
}
