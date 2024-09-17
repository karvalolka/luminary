<?php

namespace App\Http\Controllers\Admin\Fraction;

use App\Http\Controllers\Controller;
use App\Models\Fraction;

class ShowFractionController extends Controller
{
    public function __invoke(Fraction $fraction)
    {
        return view('admin.fractions.show', compact('fraction'));
    }
}
