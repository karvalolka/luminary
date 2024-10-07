<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;

class ShowCharController extends Controller
{
    public function __invoke(Char $char)
    {
        return view('personal.char.show', compact('char'));
    }
}
