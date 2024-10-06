<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Char\StoreRequest;
use App\Models\Char;
use App\Models\Inventory;

class StoreCharController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        $char = Char::create($data);
        $inventory = new Inventory();
        $char->inventory()->save($inventory);
        return redirect()->route('admin.char.index');
    }
}
