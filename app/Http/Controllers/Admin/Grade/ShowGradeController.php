<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Fraction;
use App\Models\Grade;

class ShowGradeController extends Controller
{
    public function __invoke(Grade $grade)
    {

        return view('admin.grade.show', compact('grade'));
    }
}
