<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $table = 'races';
    protected $guarded = false;

    public function fraction()
    {
        return $this->belongsTo(Fraction::class);
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'grade_race');
    }
}
