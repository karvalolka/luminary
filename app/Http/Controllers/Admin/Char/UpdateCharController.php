<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Char\UpdateRequest;
use App\Models\Char;

class UpdateCharController extends Controller
{
    public function __invoke(UpdateRequest $request, Char $char)
    {
        $data = $request->validated();
        $char->update($data);
        return view('admin.char.show', compact('char'));
    }
}
