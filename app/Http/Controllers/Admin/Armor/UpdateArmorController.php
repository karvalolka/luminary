<?php

namespace App\Http\Controllers\Admin\Armor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Armor\UpdateRequest;
use App\Models\Armor;

class UpdateArmorController extends Controller
{
    public function __invoke(UpdateRequest $request, Armor $armor)
    {
        $data = $request->validated();
        $armor->update($data);
        return view('admin.armor.show', compact('armor'));
    }
}
