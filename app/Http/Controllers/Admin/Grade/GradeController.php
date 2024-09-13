<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Fraction;
use App\Models\Grade;

class GradeController extends Controller
{
    public function __invoke()
    {
        $grades = Grade::all();
        return view('admin.grade.index', compact('grades'));
    }
}
