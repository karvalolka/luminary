<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Http\Requests\Base\BaseCharUpdateRequest;
use App\Models\Char;

class UpdateCharController extends Controller
{
    public function __invoke(BaseCharUpdateRequest $request, Char $char)
    {
        $data = $request->validated();
        $char->update($data);
        return view('personal.char.show', compact('char'));
    }
}
