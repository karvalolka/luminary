<?php

namespace App\Http\Controllers\Admin\Armor;

use App\Http\Controllers\Controller;
use App\Models\Armor;

class ShowArmorController extends Controller
{
    public function __invoke(Armor $armor)
    {
        return view('admin.armor.show', compact('armor'));
    }
}
