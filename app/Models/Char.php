<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Char extends Model
{
    use HasFactory;

    protected $table = 'chars';
    protected $guarded = false;

    public function getLevelAttribute()
    {
        return floor(pow($this->exp / 1000, 0.5)) + 1;
    }

    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function fraction()
    {
        return $this->belongsTo(Fraction::class);
    }
}
