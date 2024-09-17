<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Fraction;
use App\Models\Grade;
use App\Models\Race;
use App\Models\User;

class AdminIndexController extends Controller
{
    public function __invoke()
    {
        $data = [
            'usersCount' => User::count(),
            'racesCount' => Race::count(),
            'gradesCount' => Grade::count(),
            'fractionsCount' => Fraction::count(),
        ];
        return view('admin.main.index', compact('data'));
    }
}
