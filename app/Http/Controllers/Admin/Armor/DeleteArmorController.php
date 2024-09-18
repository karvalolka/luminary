<?php

namespace App\Http\Controllers\Admin\Armor;

use App\Http\Controllers\Controller;
use App\Models\Armor;

class DeleteArmorController extends Controller
{
    public function __invoke(Armor $armor)
    {
        $armor->delete();
        return redirect()->route('admin.armor.index');
    }
}
