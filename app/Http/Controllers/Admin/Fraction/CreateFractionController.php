<?php

namespace App\Http\Controllers\Admin\Fraction;

use App\Http\Controllers\Controller;

class CreateFractionController extends Controller
{
    public function __invoke()
    {
        return view('admin.fractions.create');
    }
}
