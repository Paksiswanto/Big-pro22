<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Category;
use App\Models\Item;
use App\Models\Invoice;
use App\Models\ItemToBill;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
{
    public function bill()
    {
        $data = Bill::where('company_id',Auth::user()->company_id)->latest()->get();
        return view('purchase.purchase_bill',compact('data'));
    }
    public function recurring_bill()
    {
      
        return view('purchase.purchase_recurring_bill');
    }
    public function add_bill()
    {
        $supplier = Supplier::where('company_id',Auth::user()->company_id)->get();
        $category = Category::where('company_id',Auth::user()->company_id);
        return view('purchase.purchase_add_bill',compact('supplier','category'));
    }
    public function saveBill(Request $request)
    {
        $start_date = date("Y-m-d", strtotime(str_replace('/', '-', $request->start_date)));

        $itemIds = $request->input('item_id',[]);
        $quantities = $request->input('quantity',[]);
        $price = $request->input('price',[]);
        $amount = $request->input('amount',[]);
        $description = $request->input('description',[]);
        $data = new Bill();
        $data->start_date = $start_date;
        $data->supplier_id = $request->supplier_id;
        $data->category_id = $request->category_id;
        $data->discount = $request->discount;
        $data->notes = $request->notes;
        $data->totalPay = $request->totalPay;
        $data->totalAmount = $request->totalAmount;
        $data->attachment = $request->attachment;
        $data->footer = $request->footer;
        $data->end_date ="2023-06-27";
        $data->bill_number = $request->bill_number;
        $data->order_quantity = $request->order_quantity;
        $data->company_id = Auth::user()->company_id;
        $data->user_id = Auth::user()->id;
        $data->totalTax = $request->totalTax;
        $data->totalDiscount = $request->totalDiscount;
        $data->save();
        $invoiceId = $data->id;
        foreach ($itemIds as $key => $itemId) {
            // Memastikan nilai 'ItemId' tidak null

                ItemToBill::create([
                    'ItemId' => $itemId,
                    'quantity' => $quantities[$key],
                    'BillId' => $invoiceId,
                    'price' => $price[$key],
                    'amount' => $amount[$key],
                    'description'=>$description[$key]
                ]);
            }
        
        
        return redirect()->route('detail_bill',[$data->id])->with('success','Data Berhasil');
    }
    public function add_recurring_bill()
    {
        return view('purchase.purchase_add_recurring_bill');
    }

    public function detail_rcr_bill()
    {
        return view('purchase.rcr_detail_bill');
    }

    public function detail_bill($id)
    {
        $data = Bill::find($id);
        $item = ItemToBill::where('BillId',$id)->get();
        return view('purchase.detail_bill',compact('data','item'));
    }

   public function getItems() {
            $itemsData = Item::whereNotNull('purchase_price')
            ->where('company_id', Auth::user()->company_id)
            ->select('id', 'name', 'tax_id')
            ->get();
            $companyId = Bill::where('company_id', Auth::user()->company_id)->count();


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
            
            ]);

    }
    function showBill($id) {
        $data= ItemToBill::where('BillId',$id)->get();
        $bill = Bill::find($id);
        $supplier = Supplier::where('company_id',Auth::user()->company_id)->get();
        $category = Category::where('company_id',Auth::user()->company_id)->get();
        $items = Item::whereNotNull('purchase_price')
            ->where('company_id', Auth::user()->company_id)
            ->select('id', 'name', 'tax_id')
            ->get();
    return view('purchase.edit-bill',compact('items','bill','supplier','category','data'));
    }
    function editBill(Request $request,$id)  {
        $data = Bill::findOrFail($id);
        $itemToInvoice = ItemToBill::where('BillId',$id);
        $itemToInvoice->delete();

        $itemIds = $request->input('item_id',[]);
        $quantities = $request->input('quantity',[]);
        $price = $request->input('price',[]);
        $amount = $request->input('amount',[]);
        $description = $request->input('description',[]);

        $data->start_date = $request->start_date;
        $data->supplier_id = $request->supplier_id;
        $data->category_id = $request->category_id;
        $data->discount = $request->discount;
        $data->notes = $request->notes;
        $data->totalPay = $request->totalPay;
        $data->totalAmount = $request->totalAmount;
        $data->attachment = $request->attachment;
        $data->footer = $request->footer;
        $data->end_date ="2023-06-27";
        $data->bill_number = $request->bill_number;
        $data->order_quantity = $request->order_quantity;
        $data->company_id = Auth::user()->company_id;
        $data->user_id = Auth::user()->id;
        $data->totalTax = $request->totalTax;
        $data->totalDiscount = $request->totalDiscount;
        $data->update();
        $invoiceId = $data->id;
        foreach ($itemIds as $key => $itemId) {
            // Memastikan nilai 'ItemId' tidak null

                ItemToBill::create([
                    'ItemId' => $itemId,
                    'quantity' => $quantities[$key],
                    'BillId' => $invoiceId,
                    'price' => $price[$key],
                    'amount' => $amount[$key],
                    'description'=>$description[$key]
                ]);
            }
        return redirect()->route('detail_bill',[$data->id])->with('success','Data Berhasil Di Sunting');
        

    }
}
