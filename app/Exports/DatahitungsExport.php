<?php

namespace App\Exports;

use App\Models\Dataset;
use App\Models\Datahitung;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DatahitungsExport implements FromView
{
    public function view(): View
    {
        return view('admin.excel.datahitung', [
            'data' => Datahitung::latest()->get()->load('dataset')
        ]);
    }
}
