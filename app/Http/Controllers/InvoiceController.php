<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceSetting;
use App\Models\Item;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoice()
    {
        $invoice = Invoice::all();
        return view('sale.sale_invoice',compact('invoice'));
    }
    public function recurring_invoice()
    {
        return view('sale.sale_recurring_invoice');
    }
    public function add_invoice()
    {
        $customer = Customer::all();
        $item = Item::all();
        $category = Category::all();
        return view('sale.sale_add_invoice',compact('customer','item','category'));
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
            'attachment' => $request->attachment,
            'footer' => $request->footer,
            'end_date' => $request->end_date,
            // 'total_pay' => $request->total_pay,
            // 'company_id' => $request->company_id,
            'invoice_number' => $request->invoice_number,
            'order_quantity' => $request->order_quantity,
            'category_id' => $request->category_id,
            'amount' => $request->amount,
        ]);

        return redirect('/invoice')->with('success','Data berhasil ditambahkan');
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
