<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventories';
    protected $guarded = false;

    public function char()
    {
        return $this->belongsTo(Char::class);
    }
    public function addItem($item)
    {
        for ($i = 1; $i <= 5; $i++) {
            if (is_null($this->{"slot$i"})) {
                $this->{"slot$i"} = $item;
                $this->save();
                return "Предмет добавлен в слот $i";
            }
        }

        return "Все слоты заполнены!";
    }

    public function removeItem($slotNumber)
    {
        if ($slotNumber >= 1 && $slotNumber <= 5) {
            $this->{"slot$slotNumber"} = null;
            $this->save();
            return "Предмет из слота $slotNumber удален";
        }

        return "Некорректный номер слота!";
    }

    public function updateGold($amount)
    {
        $this->gold += $amount;
        $this->save();
    }

}
