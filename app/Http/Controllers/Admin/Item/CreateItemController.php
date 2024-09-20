<?php

namespace App\Http\Controllers\Admin\Item;

use App\Http\Controllers\Controller;
use App\Models\Armor;
use App\Models\Weapon;

class CreateItemController extends Controller
{
    public function __invoke()
    {
        $weapons = Weapon::all();
        $armors = Armor::all();
        return view('admin.item.create', compact('weapons', 'armors'));
    }
}
