<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Char\StoreRequest;
use App\Models\User;

class StoreCharController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        User::firstOrCreate($data);
        return redirect()->route('personal.char.index');
    }
}
