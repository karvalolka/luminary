<?php

namespace App\Http\Controllers\Admin\Fraction;

use App\Http\Controllers\Controller;
use App\Models\Fraction;

class EditFractionController extends Controller
{
    public function __invoke(Fraction $fraction)
    {
        return view('admin.fractions.edit', compact('fraction'));
    }
}
