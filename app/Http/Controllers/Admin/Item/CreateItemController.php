<?php

namespace App\Http\Controllers\Admin\Item;

use App\Http\Controllers\Controller;

class CreateItemController extends Controller
{
    public function __invoke()
    {
        return view('admin.item.create');
    }
}
