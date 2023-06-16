<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceSetting extends Model
{
    use HasFactory;
    protected $fillable = ['prefix', 'digit_number', 'next_number', 'due_date', 'title', 'subtitle', 'footer', 'notes', 'company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
