<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;

class EditCharController extends Controller
{
    public function __invoke(Char $char)
    {
        return view('personal.char.edit', compact('char'));
    }
}
