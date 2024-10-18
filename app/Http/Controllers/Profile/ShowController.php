<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Weapon;


class ShowController extends Controller
{
    public function __invoke(Char $char)
    {
        $weapons = Weapon::all();
        $weapon = $char->weapon;
        return view('profile.show', compact('char', 'weapons', 'weapon'));
    }
}
