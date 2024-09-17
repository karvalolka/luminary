<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Fraction;
use App\Models\Race;

class CreateUserController extends Controller
{
    public function __invoke()
    {
        $fractions = Fraction::all();
        $race = Race::all();
        return view('admin.user.create', compact('fractions', 'race'));
    }
}
