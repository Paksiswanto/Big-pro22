<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceSetting;
use App\Models\Item;
use App\Models\Tax;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Metadata\Uses;

class InvoiceController extends Controller
{
    function getAllItems() {
        
        $items = Item::all();

        return response()->json([
            'success' => true,
            'data' => $items,
        ]);
    }
    function getAllTaxes() {
        $taxes = Tax::all();
    
        return response()->json([
            'success' => true,
            'data' => $taxes,
        ]);
    }
    
    public function invoice()
    {
        $invoice = Invoice::all();
        return view('sale.sale_invoice',compact('invoice'));
    }
    public function recurring_invoice()
    {
        return view('sale.sale_recurring_invoice');
    }
    public function addInvoice()
    {
        $customer = Customer::all();
        $item = Item::all()->whereNotNull('selling_price');
        $category = Category::all();
        $tax = Tax::all();
        $default = InvoiceSetting::find(1);
        return view('sale.sale_add_invoice',compact('customer','item','category','tax','default'));
    }
    public function create_invoice(Request $request)
    {
        $start_date = $request->start_date ? date("Y-m-d", strtotime(str_replace('/','-',$request->start_date))) : start_date("Y-m-d");
        Invoice::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'logo' => $request->logo,
            'start_date' => $request->start_date,
            'item_id' => $request->item_id,
            'customer_id' => $request->customer_id,
            'discount' => $request->discount,
            'notes' => $request->notes,
            'start_date' => $start_date,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'tax_id' => $request->tax_id,
            'total_pay' => $request->total_pay,
            'attachment' => $request->attachment,
            'footer' => $request->footer,
            'end_date' => $request->end_date,
            'invoice_number' => $request->invoice_number,
            'order_quantity' => $request->order_quantity,
            'category_id' => $request->category_id,
            'amount' => $request->amount,
        ]);

        return response()->json(['message' => 'Success Menambahkan data!']);

    }
    public function add_recurring_invoice()
    {
        return view('sale.sale_add_recurring_invoice');
    }
    public function detail_recurring()
    {
        return view('sale.sale_details_recurring_invoice');
    }
    
    public function costumers()
    {
        return view('sale.costumers');
    }

    public function add_cos()
    {
        return view('sale.add_costumers');
    }
    public function details()
    {
        return view('sale.sale_details_invoice');
    }
    public function setting_invoice()
    {
        return view('sistem_invoice.index');
    }
    public function update_invSetting(Request $request)
    {
        InvoiceSetting::create($request->all());
        return redirect('/setting-invoice')->with('success', 'Data behasil ditambahkan');
    }
    public function getItem(Request $request, $itemId) {
        $item = Item::find($itemId);
        if ($item) {
            return response()->json(['description' => $item->description]);
        } else {
            return response()->json(['error' => 'Item not found'], 404);
        }
    }
}
