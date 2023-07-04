<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CostumersController extends Controller
{
    public function costumers()
    {
        $data = customer::all();
        return view('sale.costumers', compact('data'));
    }

    public function add_cos()
    {
        return view('sale.add_costumers');
    }

    public function edit_cos($id)
    {
        $data = customer::find($id);
        return view('sale.edit_costumers', compact('data'));
    }

    public function show_cos($id)
    {
        $data = customer::find($id);
        return view('sale.showcostumers', compact('data'));
    }
    public function details()
    {
        return view('sale.sale_details_invoice');
    }
    public function insert_cos(Request $request)
    {
        $photo = $request->file('photo');
        $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
        $destinationPath = 'public/customer';
        $photo->move($destinationPath, $filename);
        customer::create([
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

        return redirect()->route('costumers');
    }
    public function update_cos(Request $request, $id)
    {
        $data = customer::find($id);
        $photo = $request->file('photo');

        if ($photo) {
            $photoPath = 'public/customer/' . $data->photo;
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
            $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = 'public/customer';
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

        return redirect()->route('costumers');
    }

    public function delete_cos($id)
    {
        $data = customer::find($id);
        $photoPath = 'public/customer/' . $data->photo;
        if(file_exists($photoPath)){
            unlink($photoPath);
        }
        $data->delete();
        return redirect()->route('costumers');
    }
}
