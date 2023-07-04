<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemToBill extends Model
{
    use HasFactory;
    protected $table = "item_to_bills";
    protected $fillable = ['BillId', 'ItemId', 'quantity', 'price', 'amount','description'];

    public function bill()
    {
        return $this->belongsTo(Bill::class, 'InvoiceId');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'ItemId');
    }
}
