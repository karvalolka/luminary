<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttackRate extends Model
{
    use HasFactory;

    protected $table = 'attack_rate';
    protected $guarded = false;

    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }
}
