<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Item; // Gantikan dengan model Anda sendiri
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ItemImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        // Proses data dari setiap baris dan simpan ke dalam model
        return new Item([
            'name' => $row['name'],
            'description' => $row['description'],
            'active' => $row['active'],
            'type' => $row['type'],
            'category_id' => $row['category_id'],
            'selling_price' => $row['selling_price'],
            'purchase_price' => $row['purchase_price'],
            'tax_id' => $row['tax_id'],
            'company_id' => $row['company_id'],
        ]);
    }
}

