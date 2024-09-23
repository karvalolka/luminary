<?php

namespace App\Http\Controllers\Admin\Armor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Armor\UpdateRequest;
use App\Models\Armor;
use Illuminate\Support\Facades\Storage;

class UpdateArmorController extends Controller
{
    public function __invoke(UpdateRequest $request, Armor $armor)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        } else {
            unset($data['image']);
        }
        $armor->update($data);
        return view('admin.armor.show', compact('armor'));
    }
}
