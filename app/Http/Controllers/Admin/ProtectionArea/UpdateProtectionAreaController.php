<?php

namespace App\Http\Controllers\Admin\ProtectionArea;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProtectionArea\UpdateRequest;
use App\Models\ProtectionArea;

class UpdateProtectionAreaController extends Controller
{
    public function __invoke(UpdateRequest $request, ProtectionArea $protectionArea)
    {
        $data = $request->validated();
        $protectionArea->update($data);
        return view('admin.protectionArea.show', compact('protectionArea'));
    }
}
