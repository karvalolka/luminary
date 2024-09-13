<?php

namespace App\Http\Controllers\Admin\Race;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Race\UpdateRequest;
use App\Models\Race;

class UpdateRaceController extends Controller
{
    public function __invoke(UpdateRequest $request, Race $race)
    {
        $data = $request->validated();
        $race->update($data);
        return view('admin.race.show', compact('race'));
    }
}
