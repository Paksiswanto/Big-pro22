<?php

namespace App\Exports;

use App\Models\Supplier;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Facades\Excel;

class SupplierExport implements FromView
{
    use Exportable;

    private $company;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(array $company)
    {
        $this->company = $company;
    }
    public function view(): View
    {
        $supplier = Supplier::all();

        return view('purchase.ExportImport.export', [
            'company' => $this->company,
            'supplier' => $supplier,
        ]);
    }
    public function export()
    {
        $export = new SupplierExport();

        return Excel::download($export, 'export.xlsx');
    }
}
