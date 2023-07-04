<?php

namespace App\Exports;

use App\Models\Supplier;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class DownloadSupplier implements FromView
{
    use Exportable;

    public $company;
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

        return view('purchase.ExportImport.dataset', [
            'company' => $this->company,
            'customer' => $supplier,
        ]);
    }
}
