<?php

namespace App\Http\Controllers\Admin\Fraction;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Fraction\StoreRequest;
use App\Models\Fraction;

class StoreFractionController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Fraction::firstOrCreate($data);
        return redirect()->route('admin.fraction.index');
    }
}
