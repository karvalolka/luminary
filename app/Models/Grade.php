<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'grades';
    protected $guarded = false;

    public function races()
    {
        return $this->belongsToMany(Race::class, 'grade_race');
    }
}
