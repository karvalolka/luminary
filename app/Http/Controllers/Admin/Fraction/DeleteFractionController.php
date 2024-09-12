<?php

namespace App\Http\Controllers\Admin\Fraction;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Fraction\UpdateRequest;
use App\Models\Fraction;

class DeleteFractionController extends Controller
{
    public function __invoke(Fraction $fraction)
    {
        $fraction->delete();
        return redirect()->route('admin.fraction.index');
    }
}
