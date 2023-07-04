<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Transfer extends Model
{
    use HasFactory;

    protected $table= 'transfer';
    protected $fillable =[
        'from_account',
        'to_account',
        'date',
        'ammount',
        'description',
        'payment_method',
        'reference',
        'attachment',
        'user_id',
        'company_id'
    ];
    public function fromAccount()
    {
        return $this->belongsTo(Account::class, 'from_account');
    }

    public function toAccount()
    {
        return $this->belongsTo(Account::class, 'to_account');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

}
