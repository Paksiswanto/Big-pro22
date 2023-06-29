<?php

namespace App\Exports;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportab;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Facades\Excel;

class CategoryExport implements FromView
{
    use Exportable;
    
    private $category_type;
    private $company;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(array $category_type, array $company)
    {
        $this->category_type = $category_type;
        $this->company = $company;
    }
    public function view(): View
    {
        $category = Category::all();

        return view('category.ExportImport.export', [
            'category_type' => $this->category_type,
            'company' => $this->company,
            'category' => $category,
        ]);
    }

    public function export()
    {
    $export = new CategoryExport();

    return Excel::download($export, 'export.xlsx');
    }
}
