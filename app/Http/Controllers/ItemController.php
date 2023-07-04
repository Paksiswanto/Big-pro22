<?php

namespace App\Http\Controllers;

use App\Exports\DownloadItem;
use App\Exports\ExportItem;
use App\Exports\ItemExport;
use App\Imports\ItemImport;
use App\Imports\YourImportClass;
use App\Models\Category;
use App\Models\Company;
use App\Models\Item;
use App\Models\Tax;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PHPExcel_IOFactory;

class ItemController extends Controller
{
    public function itemindex()
    {
      $items = Item::latest()->get() ;

      return view('item.index', compact('items'));
    }
    public function delete_item($id)
    {
      $items = Item::find($id);

      $items->delete();
      return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
    public function additem()
    {
      $category = Category::all();
      $tax = Tax::all();

      return view('item.add', compact('tax','category'));
    }
    public function create_items(Request $request)
    {
        // Membaca nilai checkbox
        $active = $request->filled('active') ? $request->boolean('active') : false;
        // Membuat objek Item dengan data dari request
        $item = new Item;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->active = $active;
        $item->type = $request->type;
        $item->category_id = $request->category_id; 
        $item->selling_price = $request->selling_price;
        $item->purchase_price = $request->purchase_price;
        $item->tax_id = $request->tax_id;
        $item->company_id = Auth::user()->company_id;
        $item->save();
    
        return redirect('/itemindex')->with('success', 'Data berhasil ditambahkan.');
    }    

    public function edititem($id)
    {
      $item = Item::find($id);
      $tax = Tax::all();
      $categories = Category::all();
      return view('item.edit', compact(['item','tax','categories']));
    }
    public function edits(Request $request, $id)
    {
        $item = Item::find($id);
        $item->update([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'tax_id' => $request->tax_id,
            'type' => $request->type,
            'purchase_price' => $request->purchase_price,
            'selling_price' => $request->selling_price,
        ]);

        return redirect('/itemindex')->with('success', 'Data berhasil diupdate');
    }

    public function ImportItem()
    {
      $category = Category::all();
      $tax = Tax::all();
      return view('item.ExportImport.import',compact('category','tax'));
    }

    public function ImportDataItem(Request $request)
    {

        $this->validate($request, [
            'myFile' => 'required|mimes:xls,xlsx'
        ]);
        
        $file = $request->file('myFile');

        try {
            Excel::import(new ItemImport, $file);

            return redirect()->back()->with('success', 'Data berhasil diimport. Jumlah baris yang diimpor:');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengimpor data: ' . $e->getMessage());
        }
    }
    public function DownloadItem()
    {
        $tax = Tax::get()->toArray();
        $category = Category::get()->toArray();
        $company = Company::get()->toArray();
        
        $randomNumber = random_int(1000, 9999); // Menghasilkan nomor acak antara 1000 dan 9999
        
        $fileName = 'Dataset_' . $randomNumber . '.xlsx'; // Gabungkan nomor acak dengan nama file
        
        return (new DownloadItem($tax, $category, $company))->download($fileName);
    }
      public function ExportItem()
      {
          $tax = Tax::all(); // Mengambil data dari model Tax (sesuaikan dengan model yang sesuai)
          $category = Category::all(); // Mengambil data dari model Category (sesuaikan dengan model yang sesuai)
          $company = Company::all(); // Mengambil data dari model Company (sesuaikan dengan model yang sesuai)
          
          $randomNumber = random_int(1000, 9999); // Menghasilkan nomor acak antara 1000 dan 9999
          
          $fileName = 'Item_' . $randomNumber . '.xlsx'; // Gabungkan nomor acak dengan nama file
          
          return Excel::download(new ItemExport($tax->toArray(), $category->toArray(), $company->toArray()), $fileName);
      }
    }

