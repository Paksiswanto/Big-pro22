<?php

namespace App\Exports;

use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class DownloadCustomer implements FromView
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
        $customer = Customer::all();

        return view('sale.ExportImport.dataset', [
            'company' => $this->company,
            'customer' => $customer,
        ]);
    }
}
