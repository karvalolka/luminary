<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProtectionArea extends Model
{
    use HasFactory;

    protected $table = 'protection_areas';
    protected $guarded = false;


    public function armors()
    {
        return $this->hasMany(Armor::class);
    }
}
