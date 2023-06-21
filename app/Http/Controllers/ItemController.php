<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Tax;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function itemindex()
    {
      $items = Item::paginate(10)->withQueryString();

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
        $item->company_id = $request->company_id;
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

}
