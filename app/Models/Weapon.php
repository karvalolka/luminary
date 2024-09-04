<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    protected $table = 'weapons';
    protected $guarded = false;

    public function protectionArea()
    {
        return $this->belongsTo(ProtectionArea::class);
    }
}
