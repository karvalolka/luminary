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
        Grade::firstOrCreate($data);
        return redirect()->route('admin.grade.index');
    }
}
