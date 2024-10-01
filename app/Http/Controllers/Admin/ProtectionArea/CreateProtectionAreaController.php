<?php

namespace App\Http\Controllers\Admin\ProtectionArea;

use App\Http\Controllers\Controller;
use App\Models\ProtectionArea;

class CreateProtectionAreaController extends Controller
{
    public function __invoke()
    {
        return view('admin.protectionArea.create');
    }
}
