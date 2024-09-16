<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fraction extends Model
{
    use HasFactory;

    protected $table = 'fractions';
    protected $guarded = false;

    public function races()
    {
        return $this->hasMany(Race::class);
    }
    public function chars()
    {
        return $this->hasMany(Char::class);
    }


}
