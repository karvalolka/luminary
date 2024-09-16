<?php

namespace App\Http\Controllers\Admin\Fraction;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Fraction;

class FractionController extends Controller
{
    public function __invoke()
    {
        $totalChars = Char::count();
        $fractions = Fraction::withCount('chars')->get();
        return view('admin.fractions.index', compact('fractions', 'totalChars'));
    }
}
