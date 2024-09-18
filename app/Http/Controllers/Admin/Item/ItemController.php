<?php

namespace App\Http\Controllers\Admin\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    public function __invoke()
    {
        $items = Item::all();
        return view('admin.item.index', compact('items'));
    }
}
