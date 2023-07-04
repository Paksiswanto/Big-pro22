<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SupplierController extends Controller
{
    public function supplier()
    {
        $data = supplier::all();
        return view('purchase.purchase_supplier',compact('data'));
    }
    public function add()
    {
        return view('purchase.purchase_add_supplier');
    }
    public function edit($id)
    {
        $data = supplier::find($id);
        return view('purchase.purchase_edit_supplier',compact('data'));
    }
    public function details()
    {
        return view('purchase.purchase_details_supplier');
    }
       public function insert_supplier(Request $request)
    {
        $photo = $request->file('photo');
        $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
        $destinationPath = 'public/supplier';
        $photo->move($destinationPath, $filename);
        supplier::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'reference' => $request->reference,
            'npwp' => $request->npwp,
            'address' => $request->address,
            'city' => $request->city,
            'province' => $request->province,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'currency' => $request->currency,
            'phone_number' => $request->phone_number,
            'company_id' => 1,
            'photo' => $filename, // Menyimpan nama file foto
        ]);

        return redirect()->route('supplier');
    }
    public function update_supplier(Request $request, $id)
    {
        $data = supplier::find($id);
        $photo = $request->file('photo');

        if ($photo) {
            $photoPath = 'public/supplier/' . $data->photo;
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
            $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = 'public/supplier';
            $photo->move($destinationPath, $filename);
            $data->update([
                'name' => $request->name,
                'email' => $request->email,
                'website' => $request->website,
                'reference' => $request->reference,
                'npwp' => $request->npwp,
                'address' => $request->address,
                'city' => $request->city,
                'province' => $request->province,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'currency' => $request->currency,
                'phone_number' => $request->phone_number,
                'company_id' => 1,
                'photo' => $filename, // Menyimpan nama file foto baru
            ]);
        } else {
            $data->update($request->all());
        }

        return redirect()->route('supplier');
    }

    public function delete_cos($id)
    {
        $data = supplier::find($id);
        $photoPath = 'public/supplier/' . $data->photo;
        if(file_exists($photoPath)){
            unlink($photoPath);
        }
        $data->delete();
        return redirect()->route('supplier');
    }
}
