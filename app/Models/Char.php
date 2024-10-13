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

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getRaceName()
    {
        return $this->race->name ?? 'Неизвестная раса';
    }

    public function getFractionName()
    {
        return $this->fraction->name ?? 'Неизвестная фракция';
    }

    public function getGradeName()
    {
        return $this->grade->name ?? 'Неизвестный класс';
    }
}
