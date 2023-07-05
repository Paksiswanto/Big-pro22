<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table = "bill";
    protected $fillable = ['start_date','end_date','item_id','supplier_id','discount','notes','attachment','footer','total_pay','quantity','price','tax_id','company_id','invoice_number','order_quantity','category_id','amount'];


    public function company()
    {
        return $this->belongsTo(company::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    function user() {
        return $this->belongsTo(User::class);
    }
    function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
