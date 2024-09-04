<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Char extends Model
{
    use HasFactory;

    protected $table = 'chars';
    protected $guarded = false;

    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
}
