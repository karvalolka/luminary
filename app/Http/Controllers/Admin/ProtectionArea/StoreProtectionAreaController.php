<?php

namespace App\Http\Controllers\Admin\ProtectionArea;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProtectionArea\StoreRequest;
use App\Models\ProtectionArea;

class StoreProtectionAreaController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        ProtectionArea::firstOrCreate($data);
        return redirect()->route('admin.protectionArea.index');
    }
}
