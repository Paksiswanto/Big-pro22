<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SupplierController extends Controller
{
    public function supplier()
    {
        $company_id = Auth::user()->company_id;

        $data = Supplier::where('company_id', $company_id)
                        ->orderBy('status')
                        ->paginate(10);
        return view('purchase.purchase_supplier', compact('data'));
    }
    public function add()
    {
        return view('purchase.purchase_add_supplier');
    }
    public function edit($id)
    {
        $company_id = Auth::user()->company_id;

$data = Supplier::where('company_id', $company_id)->find($id);
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

    public function show($id)
{
    $sup = supplier::findOrFail($id);
    return view('purchase.purchase_details_supplier', compact('sup'));
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
            $suppliers = Supplier::whereIn('id', $selectedIds)->get();

            foreach ($suppliers as $supplier) {
                $photoPath = 'public/Gmbslagi/img/supplier/' . $supplier->photo;
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
                $supplier->delete();
            }

            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Pilih setidaknya satu data untuk dihapus.');
        }
    }

        public function updateStatus($supplierId)
        {
            $supplier = Supplier::find($supplierId);

            if ($supplier) {
                $statusText = $supplier->status ? 'diaktifkan' : 'dinonaktifkan';
                $supplier->status = !$supplier->status; // Mengubah status dengan boolean yang terbalik
        $supplier->save();

        
                return redirect()->back()->with('success', 'Data berhasil ' . $statusText . '.');
            } else {
                return redirect()->back()->with('error', 'Pilih setidaknya satu data untuk dihapus.');
            }
        }
}
