<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $table ='income';

    function category()
    {
        return $this->belongsTo(Category::class);
    }
    function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}
