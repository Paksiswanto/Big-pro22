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
      return redirect()->back()->with('success', 'Item berhasil dihapus.');
    }
    public function additem()
    {
      $tax = Tax::all();

      return view('item.add', compact('tax'));
    }
    public function create_items(Request $request)
    {
    // Validasi data yang dikirim dari form
    $validatedData = $request->validate([
        'name' => 'required',
        'type' => 'required',
        'active' => 'nullable',
        'description' => 'required',
        'category' => 'required',
        'purchase_price' => 'required',
        'selling_price' => 'required',
        'tax_id' => 'required',
    ]);

    // Simpan data item ke database menggunakan model
    Item::create($validatedData);

    // Redirect ke halaman yang sesuai dengan pesan sukses
    return redirect('/itemindex')->with('success', 'Item berhasil ditambahkan.');
    }

    public function edititem($id)
    {
      $item = Item::find(1);
      $tax = Tax::all();
      $category = Category::all();
      return view('item.edit', compact('item','tax','category'));
    }
    public function edits(Request $request, $id)
    {
        $items = Item::find($id);
        $items->update([
          'name' => $request -> name,
          'description' => $request -> description,
          'category' => $request -> category,
          'tax_id' => $request -> tax_id,
          'active' => $request -> active,
          'type' => $request -> type,
          'purchase_price' => $request -> purchase_price,
          'selling_price' => $request -> selling_price,
        ]);
        $items->update($items);
        return redirect('/itemindex')->with('success', 'item berhasil di update');
    }
}
