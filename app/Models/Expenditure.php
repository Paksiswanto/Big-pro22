<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $table ='expenditure';

    function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplier_id');
    }
    function account()
    {
        return $this->belongsTo(Account::class,'account_id');
    }
}
