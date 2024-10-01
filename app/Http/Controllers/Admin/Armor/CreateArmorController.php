<?php

namespace App\Http\Controllers\Admin\Armor;

use App\Http\Controllers\Controller;
use App\Models\ProtectionArea;

class CreateArmorController extends Controller
{
    public function __invoke()
    {
        $protectionAreas = ProtectionArea::all();
        return view('admin.armor.create', compact('protectionAreas'));
    }
}
