<?php

namespace App\Imports;

use App\Models\Company;
use App\Models\Supplier;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SupplierImport implements ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        
        return new Supplier([
            'name' => $row['name'],
            'email' => $row['email'],
            'website' => $row['website'],
            'reference' => $row['reference'],
            'npwp' => $row['npwp'],
            'address' => $row['address'],
            'city' => $row['city'],
            'province' => $row['province'],
            'country' => $row['country'],
            'currency' => $row['currency'],
            'postal_code' => $row['postal_code'],
            'photo' => $row['photo'],
            'phone_number' => $row['phone_number'],
            'company_id' => Auth::user()->company_id
        ]);
    }
}
