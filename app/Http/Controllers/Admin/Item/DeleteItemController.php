<?php

namespace App\Http\Controllers\Admin\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;

class DeleteItemController extends Controller
{
    public function __invoke(Item $item)
    {
        $item->delete();
        return redirect()->route('admin.item.index');
    }
}
