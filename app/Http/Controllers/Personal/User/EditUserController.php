<?php

namespace App\Http\Controllers\Personal\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditUserController extends Controller
{
    public function __invoke($userId)
    {
        $user = User::findOrFail($userId);
        return view('personal.user.edit', compact('user'));
    }

}
