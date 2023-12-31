<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyConvert extends Model
{
    use HasFactory;

    protected $fillable = [
        'original_amount',
        'converted_amount',
        'exchange_rate',
    ];

    protected $table = 'results';
}
