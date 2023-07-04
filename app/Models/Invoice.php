<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = "invoice";
    protected $fillable = ['title','subtitle','logo','start_date','end_date','item_id','customer_id','discount','notes','attachment','footer','total_pay','quantity','price','tax_id','company_id','invoice_number','order_quantity','category_id','amount'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
    public function company()
    {
        return $this->belongsTo(company::class);
    }
    function user() {
        return $this->belongsTo(User::class);
    }
}
