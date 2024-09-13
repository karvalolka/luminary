<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Models\Race;

class CreateGradeController extends Controller
{
    public function __invoke()
    {
        $races = Race::all();
        return view('admin.grade.create', compact('races'));
    }
}
