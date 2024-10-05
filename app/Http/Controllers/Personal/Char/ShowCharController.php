<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Fraction;
use App\Models\User;

class ShowCharController extends Controller
{
    public function __invoke(Char $char)
    {
        return view('personal.char.show', compact('char'));
    }
}
