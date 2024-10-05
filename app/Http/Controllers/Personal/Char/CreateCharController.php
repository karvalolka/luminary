<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Models\Fraction;
use App\Models\Grade;
use App\Models\Race;

class CreateCharController extends Controller
{
    public function __invoke()
    {
        $fractions = Fraction::all();
        $races = Race::all();
        $grades = Grade::all();
        return view('personal.char.create', compact('fractions', 'races', 'grades'));
    }
}
