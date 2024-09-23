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
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Armor::firstOrCreate($data);
        return redirect()->route('admin.armor.index');
    }
}
