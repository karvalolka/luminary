<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Weapon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function __invoke()
    {
        $chars = Char::where('user_id', auth()->id())->get();
        $weapons = Weapon::all();
        $characterWeapons = [];

        foreach ($chars as $char) {
            $characterWeapons[$char->id] = $char->weapon;
        }
        return view('main.index', compact('chars', 'weapons', 'characterWeapons'));
    }
}
