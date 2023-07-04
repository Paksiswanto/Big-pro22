<?php

namespace App\Http\Controllers;

use App\Exports\DownloadCategory;
use App\Exports\DownloadSupplier;
use App\Exports\SupplierExport;
use App\Imports\SupplierImport;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

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
            'company_id' => Auth::user()->company_id,
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
                'company_id' => Auth::user()->company_id,
                'photo' => $filename, // Menyimpan nama file foto baru
            ]);
        } else {
            $data->update($request->all());
        }

        return redirect()->route('supplier');
    }

    public function delete_supplier($id)
    {
        $data = supplier::find($id);
        $photoPath = 'public/supplier/' . $data->photo;
        if(file_exists($photoPath)){
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
    public function ImportSupplier()
    {
        return view('purchase.ExportImport.import');
    }
    public function ImportDataSupplier(Request $request)
    {
        $this->validate($request, [
            'myFile' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('myFile');

        try {
            Excel::import(new SupplierImport, $file);

            return redirect()->back()->with('success', 'Data berhasil diimpor');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengimpor data: ' . $e->getMessage());
        }
    }
    public function DownloadSupplier()
    {
        $supplier = Supplier::get()->toArray();

        $randomNumber = random_int(1000, 9999);

        $filename = 'Dataset_' . $randomNumber . '.xlsx';

        return (new DownloadSupplier($supplier))->download($filename);
    }
    public function ExportSupplier()
    {
        $supplier = Supplier::all();

        $randomNumber = random_int(1000, 9999);

        $filename = 'Supplier_' . $randomNumber . '.xlsx';

        return Excel::download(new SupplierExport($supplier->toArray()), $filename);
    }
}
