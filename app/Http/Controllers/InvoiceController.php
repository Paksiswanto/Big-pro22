<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceSetting;
use App\Models\Item;
use App\Models\ItemToInvoice;
use App\Models\Tax;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Metadata\Uses;

class InvoiceController extends Controller
{
    // Controller untuk mengambil data item
    function getItem($id) {
            $data = ItemToInvoice::where('InvoiceId',$id)->get();

            $itemsData = Item::whereNotNull('selling_price')
            ->where('company_id', Auth::user()->company_id)
            ->select('id', 'name', 'tax_id')
            ->get();
            $companyId = Invoice::where('company_id',Auth::user()->company_id)->count();
            // Ubah format data menjadi array yang berisi objek dengan atribut 'id' dan 'name'
            $itemOptions = $itemsData->map(function ($item) {
            return [
            'id' => $item->id,
            'name' => $item->name,
            'tax_id' => $item->tax_id,
            ];
            });

            // Kembalikan data dalam format JSON
            return response()->json([
            'success' => true,
            'data' => $itemOptions,
            'company'=>$companyId,
            'invoice' => $data
            ]);

    }
            public function getItemsData()
            {
                // Lakukan proses pengambilan data item dari database atau sumber data lainnya
            // Mengambil data item dari database
            $itemsData = Item::whereNotNull('selling_price')
            ->where('company_id', Auth::user()->company_id)
            ->select('id', 'name', 'tax_id')
            ->get();
            $companyId = Invoice::where('company_id',Auth::user()->company_id)->count();
            $default = InvoiceSetting::where('company_id',Auth::user()->company_id)->first();
            if ($default == null) {
                $default = "FKR";
            }


            // Ubah format data menjadi array yang berisi objek dengan atribut 'id' dan 'name'
            $itemOptions = $itemsData->map(function ($item) {
            return [
            'id' => $item->id,
            'name' => $item->name,
            'tax_id' => $item->tax_id,
            ];
            });

            // Kembalikan data dalam format JSON
            return response()->json([
            'success' => true,
            'data' => $itemOptions,
            'company'=>$companyId,
            'prefix'=>$default,
            ]);

            }

// Controller untuk mengambil data tax


// Controller untuk mengambil data item berdasarkan ID
public function getItemData($id)
{
    // Lakukan proses pengambilan data item berdasarkan ID dari database atau sumber data lainnya
    $itemData = Item::find($id); // Data item yang ditemukan

    if (!$itemData) {
        return response()->json([
            'success' => true,
            'data' => $itemData,
        ]);
    }
    function getAllTaxes() {
        $taxes = Tax::all();
    
        return response()->json([
            'success' => true,
            'data' => $taxes,
        ]);
    }
    if ($itemData->tax_id != null) {
        $tax = Tax::find($itemData->tax_id);
        $taxAmount = $tax->tax_amount; // Retrieve the tax data
        $taxName = $tax->name;
         // Kembalikan data dalam format JSON
    return response()->json([
        'success' => true,
        'tax' => $taxName,
        'taxAmount'=>$taxAmount,
        'data' => $itemData,
        'description'=>$itemData->description
    ]);
    }
    else {
        return response()->json([
            'success' => true,
            'tax' => 'null',
            'data' => $itemData,
        ]);
    }
    

   
}
    
    public function invoice()
    {
        $invoice = Invoice::where('company_id',Auth::user()->company_id)->latest()->get();
        return view('sale.sale_invoice',compact('invoice'));
    }
    public function recurring_invoice()
    {
        return view('sale.sale_recurring_invoice');
    }
    public function addInvoice()
    {
        $customer = Customer::all();
        $category_type = CategoryType::where('id',1)->get();
        $item = Item::all()->whereNotNull('selling_price');
        $category = Category::all();
        $tax = Tax::all();
        $default = InvoiceSetting::where('company_id',Auth::user()->company_id)->first();
        return view('sale.sale_add_invoice',compact('customer','item','category','tax','default','category_type'));
    }
    public function create_invoice(Request $request)
    {
        
        $itemIds = $request->input('item_id',[]);
        $quantities = $request->input('quantity',[]);
        $price = $request->input('price',[]);
        $amount = $request->input('amount',[]);
        $description = $request->input('description',[]);
        $data = new Invoice();
        $data->logo = 32;
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->start_date = "2023-06-27";
        $data->customer_id = $request->customer_id;
        $data->category_id = 1;
        $data->discount = $request->discount;
        $data->notes = $request->notes;
        $data->totalPay = $request->totalPay;
        $data->totalAmount = $request->totalAmount;
        $data->attachment = $request->attachment;
        $data->footer = $request->footer;
        $data->end_date ="2023-06-27";
        $data->invoice_number = $request->invoice_number;
        $data->order_quantity = $request->order_quantity;
        $data->company_id = Auth::user()->company_id;
        $data->user_id = Auth::user()->id;
        $data->totalTax = $request->totalTax;
        $data->totalDiscount = $request->totalDiscount;
        $data->save();
        $invoiceId = $data->id;
        foreach ($itemIds as $key => $itemId) {
            // Memastikan nilai 'ItemId' tidak null

                ItemToInvoice::create([
                    'ItemId' => $itemId,
                    'quantity' => $quantities[$key],
                    'InvoiceId' => $invoiceId,
                    'price' => $price[$key],
                    'amount' => $amount[$key],
                    'description'=>$description[$key]
                ]);
            }
        
        


            return redirect()->route('details_inv', ['id' => $data->id])->with('success', 'Data berhasil dibuat');
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
    public function details($id)
    {
        $data = Invoice::find($id);
        $items = ItemToInvoice::where('InvoiceId',$data->id)->get();
        return view('sale.sale_details_invoice',compact('data','items'));
    }
    public function setting_invoice()
    {
        $data = InvoiceSetting::where('company_id',Auth::user()->company_id)->first();
        return view('sistem_invoice.index',compact('data'));
    }
    public function update_invSetting(Request $request)
    {
        InvoiceSetting::create($request->all());
        return redirect('/setting-invoice')->with('success', 'Data behasil ditambahkan');
    }

    function showInvoice($id) {
        $data = ItemToInvoice::where('InvoiceId',$id)->get();
        $invoice = Invoice::find($id);
        $default = InvoiceSetting::find(1);
        $customer = Customer::where('company_id',Auth::user()->company_id)->get();
        $category = Category::where('company_id',Auth::user()->company_id);
        $items = Item::whereNotNull('selling_price')
        ->where('company_id', Auth::user()->company_id)
        ->select('id', 'name', 'tax_id')
        ->get();
        return view('sale.editInvoice',compact('data','invoice','default','customer','category','items'));
    }
    function editInvoice(Request $request,$id) {
        $data = Invoice::findOrFail($id);
        $itemToInvoice = ItemToInvoice::where('InvoiceId',$id);
        $itemToInvoice->delete();

        $itemIds = $request->input('item_id',[]);
        $quantities = $request->input('quantity',[]);
        $price = $request->input('price',[]);
        $amount = $request->input('amount',[]);
        $description = $request->input('description',[]);
        
        $data->logo = 32;
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->start_date = "2023-06-27";
        $data->customer_id = $request->customer_id;
        $data->category_id = 1;
        $data->discount = $request->discount;
        $data->notes = $request->notes;
        $data->totalPay = $request->totalPay;
        $data->totalAmount = $request->totalAmount;
        $data->attachment = $request->attachment;
        $data->footer = $request->footer;
        $data->end_date ="2023-06-27";
        $data->invoice_number = $request->invoice_number;
        $data->order_quantity = $request->order_quantity;
        $data->company_id = Auth::user()->company_id;
        $data->user_id = Auth::user()->id;
        $data->totalTax = $request->totalTax;
        $data->totalDiscount = $request->totalDiscount;
        $data->update();
        $invoiceId = $data->id;
        foreach ($itemIds as $key => $itemId) {
            // Memastikan nilai 'ItemId' tidak null

                ItemToInvoice::create([
                    'ItemId' => $itemId,
                    'quantity' => $quantities[$key],
                    'InvoiceId' => $invoiceId,
                    'price' => $price[$key],
                    'amount' => $amount[$key],
                    'description'=>$description[$key]
                ]);
            }
        return redirect()->route('details_inv',[$data->id])->with('success','Data Berhasil Di Sunting');
        
      }
      function deleteInvoice($id) {
        $data = Invoice::findOrFail($id);
        $item = ItemToInvoice::where('InvoiceId',$id);
        $data->delete();
        $item->delete();
        return redirect()->back()->with('success','Data Berhasil Dihapus');
      }
}
