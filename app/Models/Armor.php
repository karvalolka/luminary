<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    use HasFactory;

    protected $table = 'armors';
    protected $guarded = false;

    public function protectionArea()
    {
        return $this->belongsTo(ProtectionArea::class, 'protection_area_id');
    }
}
