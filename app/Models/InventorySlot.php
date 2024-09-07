<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventorySlot extends Model
{
    use HasFactory;

    protected $table = 'inventory_slots';
    protected $guarded = false;

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}

