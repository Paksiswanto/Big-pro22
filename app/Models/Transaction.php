<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function invoice()
    {
        return $this->belongsTo(Invoice::class,'invoice_id');
    }
    public function bill()
    {
        return $this->belongsTo(Bill::class,'bill_id');
    }
    public function income()
    {
        return $this->belongsTo(Income::class,'income_id');
    }
    public function expend()
    {
        return $this->belongsTo(Expenditure::class,'expenditure_id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }
    public function transfer()
    {
        return $this->belongsTo(Transfer::class,'transfer_id');
    }
    public function account()
    {
        return $this->belongsTo(Account::class,'account_id');
    }
}
