<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    protected $table = 'weapons';
    protected $guarded = false;

    public function attackRate()
    {
        return $this->belongsTo(AttackRate::class, 'attack_rates_id');
    }
    public function char()
    {
        return $this->belongsTo(Char::class);
    }
}
