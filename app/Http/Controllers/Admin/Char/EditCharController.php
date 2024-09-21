<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\User;

class EditCharController extends Controller
{
    public function __invoke(Char $char)
    {
        return view('admin.char.edit', compact('char'));
    }
}
