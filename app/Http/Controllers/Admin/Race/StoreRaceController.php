<?php

namespace App\Http\Controllers\Admin\Race;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Race\StoreRequest;
use App\Models\Race;

class StoreRaceController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Race::firstOrCreate([
            'name' => $data['name'],
            'fraction_id' => $data['fraction_id'],
        ]);
        return redirect()->route('admin.race.index');
    }
}
