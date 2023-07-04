<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemToInvoice extends Model
{
    use HasFactory;

    protected $table = "_items_to_invoices";
    protected $fillable = ['InvoiceId', 'ItemId', 'quantity', 'price', 'amount','description'];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'InvoiceId');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'ItemId');
    }


}
