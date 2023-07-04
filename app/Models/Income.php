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
        return $this->belongsTo(Category::class,'category_id');
    }
    function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
    function account()
    {
        return $this->belongsTo(Account::class,'account_id');
    }

    function categoryType()
    {
        return $this->belongsTo(CategoryType::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
