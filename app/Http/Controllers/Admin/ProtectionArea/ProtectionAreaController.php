<?php

namespace App\Http\Controllers\Admin\ProtectionArea;

use App\Http\Controllers\Controller;
use App\Models\ProtectionArea;

class ProtectionAreaController extends Controller
{
    public function __invoke()
    {
        $protectionAreas = ProtectionArea::all();
        return view('admin.protectionArea.index', compact('protectionAreas'));
    }
}
