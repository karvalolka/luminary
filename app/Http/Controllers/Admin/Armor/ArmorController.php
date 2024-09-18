<?php

namespace App\Http\Controllers\Admin\Armor;

use App\Http\Controllers\Controller;
use App\Models\Armor;

class ArmorController extends Controller
{
    public function __invoke()
    {
        $armors = Armor::all();
        return view('admin.armor.index', compact('armors'));
    }
}
