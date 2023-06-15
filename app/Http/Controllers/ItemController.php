<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Tax;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function itemindex()
    {
      $items = Item::all();

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
      $category= Category::all();
      $tax = Tax::all();

      return view('item.add', compact('tax','category'));
    }
    public function create_items(Request $request)
    {
    // Validasi data yang dikirim dari form
   

    // Simpan data item ke database menggunakan model
    Item::create($request->all());

    // Redirect ke halaman yang sesuai dengan pesan sukses
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
            'purchase_price' => $request->purchase_price,
            'selling_price' => $request->selling_price,
        ]);

        return redirect('/itemindex')->with('success', 'Data berhasil diupdate');
    }

}
