<?php

namespace App\Http\Controllers\Admin\Race;

use App\Http\Controllers\Controller;
use App\Models\Fraction;

class CreateRaceController extends Controller
{
    public function __invoke()
    {
        $fractions = Fraction::all();
        return view('admin.race.create' , compact('fractions'));
    }
}
