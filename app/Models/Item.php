<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = "item";
    protected $fillable = ['name','tax_id','description','type','currency','category_id','selling_price','purchase_price','active'];

    function tax()
    {
        return $this->belongsTo(Tax::class);
    }
    function category()
    {
        return $this->belongsTo(category::class); 
    }
}
