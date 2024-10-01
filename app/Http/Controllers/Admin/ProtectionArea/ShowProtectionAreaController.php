<?php

namespace App\Http\Controllers\Admin\ProtectionArea;

use App\Http\Controllers\Controller;
use App\Models\ProtectionArea;

class ShowProtectionAreaController extends Controller
{
    public function __invoke(ProtectionArea $protectionArea)
    {
        return view('admin.protectionArea.show', compact('protectionArea'));
    }
}
