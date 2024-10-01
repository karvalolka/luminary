<?php

namespace App\Http\Controllers\Admin\Armor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Armor\StoreRequest;
use App\Models\Armor;
use Illuminate\Support\Facades\Storage;

class StoreArmorController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = Storage::disk('public')->put('/images', $request->file('image'));
        }
        Armor::firstOrCreate($data);
        return redirect()->route('admin.armor.index');
    }
}
