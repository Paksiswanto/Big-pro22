<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CategoryImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        $category_type = CategoryType::where('name', $row['category_type_id'])->firstOrFail();


        return new Category([
            'name' => $row['name'],
            // 'parent' => $row['parent'],
            'color' => $row['color'],
            'category_type_id' => $category_type->id,
            'company_id' => Auth::user()->company_id
        ]);
    }
}
