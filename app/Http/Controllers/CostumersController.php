<?php

namespace App\Http\Controllers;

use App\Exports\CustomerExport;
use App\Exports\DownloadCustomer;
use App\Exports\ExportCustomer;
use App\Imports\CategoryImport;
use App\Imports\CustomerImport;
use App\Models\Company;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

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
            'company_id' => Auth::user()->company_id,   
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
    public function deleteSelected(Request $request)
    {
        $selectedIds = $request->input('selected_ids');

        if (!empty($selectedIds)) {
            customer::whereIn('id', $selectedIds)->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Pilih setidaknya satu data untuk dihapus.');
        }
    }

    public function updateStatus($customerId)
{
    $customer = Customer::find($customerId);

    if ($customer) {
        $statusText = $customer->status ? 'diaktifkan' : 'dinonaktifkan';
        $customer->status = !$customer->status; // Mengubah status dengan boolean yang terbalik
        $customer->save();

        return redirect()->back()->with('success', 'Data berhasil ' . $statusText . '.');
    } else {
        return redirect()->back()->with('error', 'Pilih setidaknya satu data untuk dihapus.');
    }
}

    public function ImportCustomer()
    {
        return view('sale.ExportImport.import');
    }
    public function ImportDataCustomer(Request $request)
    {
        $this->validate($request, [
            'myFile' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('myFile');

        try {
            Excel::import(new CustomerImport, $file);

            return redirect()->back()->with('success', 'Data berhasil diimpor');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Trejadi kesalahan saat mengimpor data: ' . $e->getMessage());
        }
    }
    public function DownloadCustomer()
    {
        $company = Company::get()->toArray();

        $randomNumber = random_int(1000, 9999);

        $filename = 'Dataset_' . $randomNumber . '.xlsx';

        return (new DownloadCustomer($company))->download($filename);
    }
    public function ExportCustomer()
    {
        $company = Company::all();

        $randomNumber = random_int(1000, 9999);

        $filename = 'Customer_' . $randomNumber . '.xlsx';

        return Excel::download(new CustomerExport($company->toArray()), $filename);
    }
}
