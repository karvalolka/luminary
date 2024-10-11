<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Char;


class ShowController extends Controller
{
    public function __invoke(Char $char)
    {
        return view('profile.show', compact('char'));
    }
}
