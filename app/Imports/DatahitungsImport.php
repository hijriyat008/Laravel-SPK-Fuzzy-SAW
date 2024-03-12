<?php

namespace App\Imports;

use App\Models\Datahitung;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatahitungsImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        // Validator::make($rows->toArray(), [
        //     '*.1' => 'required|max:255',
        //     '*.2' => 'required|max:255',
        //     '*.3' => 'required',
        //     '*.4' => 'required|max:255',
        //     '*.5' => 'required',
        //     '*.6' => 'required|max:255',
        //     '*.7' => ['required', 'max:255', 'unique:datasets', 'email:dns'],
        //     '*.8' => ['required', 'min:12', 'max:12', 'unique:datasets']
        // ])->validate();

        foreach ($rows as $row) {
            Datahitung::create([
                'dataset_id' => $row['dataset_id'],
                'penghasilan_orangtua' => $row['penghasilan_orangtua'],
                'tanggungan_orangtua' => $row['tanggungan_orangtua'],
                'status_rumah' => $row['status_rumah'],
                'kondisi_rumah' => $row['kondisi_rumah'],
                'aset' => $row['aset'],
                'kendaraan' => $row['kendaraan'],
                'usia' => $row['usia'],
                'bantuan' => $row['bantuan'],
                'ipk' => $row['ipk'],
                'status' => 'Valid'
            ]);
        }
    }
}
