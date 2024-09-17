<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Grade\StoreRequest;
use App\Models\Grade;

class StoreGradeController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $grade = Grade::firstOrCreate([
            'name' => $data['name'],
        ]);
        $grade->races()->sync($data['race']);
        return redirect()->route('admin.grade.index');
    }
}
