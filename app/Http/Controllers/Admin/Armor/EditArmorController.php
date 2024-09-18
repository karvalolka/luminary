<?php

namespace App\Http\Controllers\Admin\Armor;

use App\Http\Controllers\Controller;
use App\Models\Armor;
use App\Models\ProtectionArea;

class EditArmorController extends Controller
{
    public function __invoke(Armor $armor)
    {
        $protectionAreas = ProtectionArea::all();
        return view('admin.armor.edit', compact('armor', 'protectionAreas'));
    }
}
