<?php

namespace App\Imports;

use App\Models\Account;
use App\Models\Company;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TransferImport implements ToModel,WithHeadingRow,WithCustomCsvSettings
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $from_account = Account::where('name', $row['from_account'])->firstOrFail();
        $to_account = Account::where('name', $row['to_account'])->firstOrFail();
        $user = User::where('name', $row['user_id'])->firstOrFail();
        $company = Company::where('name', $row['company_id'])->firstOrFail();

        $date = Carbon::createFromFormat('d/m/Y', $row['date'])->format('Y-m-d');

        return new Transfer([
            'from_account' => $from_account->id,
            'to_account' => $to_account->id,
            'user' => $user->id,
            'company' => $company->id,
            'date' => $date,
            'ammount' => $row['ammount'],
            'description' => $row['description'],
            'payment_method' => $row['payment_method'],
            'reference' => $row['reference'],
            'attachment' => $row['attachment'],
        ]);
    }
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ',',
            'enclosure' => '"',
        ];
    }
}
