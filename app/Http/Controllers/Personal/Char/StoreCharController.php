<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Char\StoreRequest;
use App\Models\Char;
use App\Models\Inventory;

class StoreCharController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        $characterCount = Char::where('user_id', $data['user_id'])->count();

        if ($characterCount >= 2) {
            return redirect()->back()->withErrors(['error' => 'Достигнуто максимальное количество персонажей (2).']);
        }

        $char = Char::create($data);
        $inventory = new Inventory();
        $char->inventory()->save($inventory);
        return redirect()->route('personal.char.index');
    }
}
