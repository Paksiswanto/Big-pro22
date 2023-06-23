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
        return view('purchase.purchase_supplier', compact('data'));
    }
    public function add()
    {
        return view('purchase.purchase_add_supplier');
    }
    public function edit($id)
    {
        $data = supplier::find($id);
        return view('purchase.purchase_edit_supplier', compact('data'));
    }


    public function delete($id)
    {
        $supplier = supplier::find($id);

        if ($supplier) {
            $supplier->delete();
            return redirect()->back()->with('success', 'Data supplier berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data supplier tidak ditemukan');
        }
    }


    public function details()
    {
        return view('purchase.purchase_details_supplier');
    }
    public function insert_supplier(Request $request)
    {
        // Mendapatkan file foto yang diunggah dari permintaan pengguna
        $photo = $request->file('photo');

        // Menghasilkan nama unik untuk file foto
        $filename = uniqid() . '.' . $photo->getClientOriginalExtension();

        // Menentukan path atau direktori tujuan untuk menyimpan file foto
        $destinationPath = 'public/Gmbslagi/img/supplier';

        // Menyimpan file foto ke direktori tujuan dengan nama yang dihasilkan
        $photo->move($destinationPath, $filename);

        // Menyimpan data supplier beserta foto ke dalam database
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
        // Mendapatkan file foto yang diunggah dari permintaan pengguna
        $photo = $request->file('photo');

        if ($photo) {
            // Menghapus foto lama jika ada
            $photoPath = 'public/Gmbslagi/img/supplier/' . $data->photo;
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }

            // Menghasilkan nama unik untuk file foto baru
            $filename = uniqid() . '.' . $photo->getClientOriginalExtension();

            // Menentukan path atau direktori tujuan untuk menyimpan file foto
            $destinationPath = 'public/Gmbslagi/img/supplier';

            // Menyimpan file foto baru ke direktori tujuan dengan nama yang dihasilkan
            $photo->move($destinationPath, $filename);

            // Memperbarui data supplier beserta foto baru ke dalam database
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
            // Jika tidak ada foto yang diunggah, hanya memperbarui data supplier tanpa mengubah foto
            $data->update($request->all());
        }

        return redirect()->route('supplier');
    }

    public function delete_cos($id)
    {
        $data = supplier::find($id);
        $photoPath = 'public/Gmbslagi/img/supplier/' . $data->photo;
        if (file_exists($photoPath)) {
            unlink($photoPath);
        }
        $data->delete();
        return redirect()->route('supplier');
    }

    public function deleteSelected(Request $request)
    {
        $selectedIds = $request->input('selected_ids');
    
        if (!empty($selectedIds)) {
           $udin = Supplier::whereIn('id', $selectedIds);
           $photoPath = 'public/Gmbslagi/img/supplier/' . $udin->photo;
        if (file_exists($photoPath)) {
            unlink($photoPath);
        }
        $udin->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Pilih setidaknya satu data untuk dihapus.');
        }
    }
}
