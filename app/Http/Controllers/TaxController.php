<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function tax_index()
    {
        $data = Tax::all();
        return  view('Tax.index', compact('data'));
    }

    public function tax_add()
    {
        return  view('Tax.add');
    }

    public function tax_insert(Request $request)
    {
        Tax::create([
            'name' => $request->name,
            'tax_amount' => $request->tax_amount,
            'type' => $request->type,
            'company_id' => 1,
        ]);
        return redirect()->route('tax');
    }

    public function tax_edit($id)
    {
        $data = Tax::find($id);
        return  view('Tax.edit', compact('data'));
    }

    public function tax_update(Request $request, $id)
    {
        $data = Tax::find($id);
        $data->update($request->all());
        return redirect()->route('tax');
    }

    public function tax_delete($id)
    {
        $data = Tax::find($id);
        $data->delete();
        return redirect()->route('tax');
    }
}
