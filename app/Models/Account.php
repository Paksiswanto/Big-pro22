<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'account' ;

    public function incomes()
    {
        return $this->hasMany(Income::class);
    }
    public function expenditure()
    {
        return $this->hasMany(Expenditure::class);
    }
    public function transfer()
    {
        return $this->hasMany(Transfer::class);
    }

}
