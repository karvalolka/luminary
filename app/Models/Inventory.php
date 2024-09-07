<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    const MAX_SLOTS = 5;

    protected $table = 'inventories';
    protected $guarded = false;

    public function char()
    {
        return $this->belongsTo(Char::class);
    }
    public function addItem($item)
    {
        if ($this->slots()->count() < self::MAX_SLOTS) {
            $this->slots()->create(['item' => $item]);
            return "Предмет добавлен в инвентарь";
        }

        return "Инвентарь полон!";
    }

    public function removeItem($slotId)
    {
        $slot = $this->slots()->find($slotId);
        if ($slot) {
            $slot->delete();
            return "Предмет из слота $slotId удален";
        }

        return "Некорректный номер слота!";
    }

    public function changeGold($amount)
    {
        $this->gold += $amount;
        $this->save();
    }

    public function slots()
    {
        return $this->hasMany(InventorySlot::class);
    }
}
