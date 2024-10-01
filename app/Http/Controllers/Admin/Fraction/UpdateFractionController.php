<?php

namespace App\Http\Controllers\Admin\Fraction;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Fraction\UpdateRequest;
use App\Models\Fraction;

class UpdateFractionController extends Controller
{
    public function __invoke(UpdateRequest $request, Fraction $fraction)
    {
        $data = $request->validated();
        $fraction->update($data);
        return view('admin.fractions.show', compact('fraction'));
    }
}
