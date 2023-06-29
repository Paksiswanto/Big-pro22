<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $table ='customer';

    public function incomes()
    {
        return $this->hasMany(Income::class);
    }
    public function incomesRoutine()
    {
        return $this->hasMany(IncomeRoutine::class);
    }
    protected $casts = [
        'status' => 'boolean',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
