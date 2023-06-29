<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Company;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Item; // Gantikan dengan model Anda sendiri
use App\Models\Tax;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ItemImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        $tax = Tax::where('name', $row['tax_id'])->firstOrFail();
        $category = Category::where('name', $row['category_id'])->firstOrFail();
        $company = Company::where('name', $row['company_id'])->firstOrFail();
        // Proses data dari setiap baris dan simpan ke dalam model
        return new Item([
            'name' => $row['name'],
            'description' => $row['description'],
            'active' => $row['active'],
            'type' => $row['type'],
            'category_id' => $category->id,
            'selling_price' => $row['selling_price'],
            'purchase_price' => $row['purchase_price'],
            'tax_id' => $tax->id,
            'company_id' => $company->id,
        ]);
    }
}

