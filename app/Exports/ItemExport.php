<?php

namespace App\Exports;

use App\Models\Item;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Facades\Excel;
class ItemExport implements FromView
{
    use Exportable;

    private $tax;
    private $category;
    private $company;

    /**
    * @return \Illuminate\Support\Collection
    */
    // private array $tax, $category, $company;
    public function __construct(array $tax, array $category, array $company)
    {
        $this->tax = $tax;
        $this->category = $category;
        $this->company = $company;
    }

    public function view(): View
    {
        $items = Item::all();

        return view('item.ExportImport.export', [
            'tax' => $this->tax,
            'category' => $this->category,
            'company' => $this->company,
            'items' => $items,
        ]);

    }
    
    // public function export()
    // {
    //     $taxData = Tax::all()->toArray();
    //     $categoryData = Category::all()->toArray();
    //     $companyData = Company::all()->toArray();

    //     $export = new ItemExport($taxData, $categoryData, $companyData);

    //     return Excel::download($export, 'dataset.xlsx');
    // }

    public function export()
    {
    $export = new ItemExport();

    return Excel::download($export, 'export.xlsx');
    }

}
