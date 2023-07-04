<?php

namespace App\Exports;

use App\Models\Transfer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class TransferExport implements FromView
{
    use Exportable;

    private $from_account;
    private $to_account;
    private $user;
    private $company;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(array $from_account, array $to_account, array $user, array $company)
    {
        $this->from_account = $from_account;
        $this->to_account = $to_account;
        $this->user = $user;
        $this->company = $company;
    }
    public function view(): View
    {
        $transfer = Transfer::all();

        return view('transfer.ExportImport.export',[
            'from_account' => $this->from_account,
            'to_account' => $this->to_account,
            'user' => $this->user,
            'company' => $this->company,
            'transfer' => $transfer,
        ]);
    }
}
