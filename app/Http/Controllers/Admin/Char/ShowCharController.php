<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Fraction;
use App\Models\User;

class ShowCharController extends Controller
{
    public function __invoke(Char $char)
    {
        return view('admin.char.show', compact('char'));
    }
}
