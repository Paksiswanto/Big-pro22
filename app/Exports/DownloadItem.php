<?php

namespace App\Exports;

use App\Models\Item;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
class DownloadItem implements FromView
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

        return view('item.ExportImport.dataset', [
            'tax' => $this->tax,
            'category' => $this->category,
            'company' => $this->company,
            'items' => $items,
        ]);

    }

}
