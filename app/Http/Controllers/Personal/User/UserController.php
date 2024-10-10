<?php

namespace App\Http\Controllers\Personal\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return view('personal.user.index', compact('users'));
    }
}
