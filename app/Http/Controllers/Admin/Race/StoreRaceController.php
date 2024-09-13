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
        Race::firstOrCreate($data);
        return redirect()->route('admin.race.index');
    }
}
