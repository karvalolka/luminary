<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Fraction\UpdateRequest;
use App\Models\Grade;

class UpdateGradeController extends Controller
{
    public function __invoke(UpdateRequest $request, Grade $grade)
    {
        $data = $request->validated();
        $grade->update($data);
        return view('admin.grade.show', compact('grade'));
    }
}
