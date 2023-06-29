<?php

namespace App\Exports;

use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Facades\Excel;

class CustomerExport implements FromView
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
        $customer = Customer::all();

        return view('sale.ExportImport.export', [
            'company' => $this->company,
            'customer' => $customer,
        ]);
    }
    public function export()
    {
        $export = new CustomerExport();

        return Excel::download($export, 'export.xlsx');
    }
}
