<?php

namespace App\Exports;

use App\Models\Dataset;
use App\Models\Datahitung;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class DatasetsExport implements FromView
{
    /**e
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('admin.excel.dataset', [
            'data' => Dataset::latest()->get()
        ]);
    }
}
