<?php

namespace App\Http\Controllers\Admin\ProtectionArea;

use App\Http\Controllers\Controller;
use App\Models\ProtectionArea;

class DeleteProtectionAreaController extends Controller
{
    public function __invoke(ProtectionArea $protectionArea)
    {
        $protectionArea->delete();
        return redirect()->route('admin.protectionArea.index');
    }
}
