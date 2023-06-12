<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table='tax';

    function item()
    {
        return $this->hasMany(item::class);
    }
}

