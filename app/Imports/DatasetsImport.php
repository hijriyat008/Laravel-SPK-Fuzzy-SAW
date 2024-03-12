<?php

namespace App\Imports;

use App\Models\Dataset;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatasetsImport implements ToCollection, WithHeadingRow
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
            Dataset::create([
                'user_id' => $row['user_id'],
                'nama' => $row['nama'],
                'nim' => $row['nim'],
                'jk' => $row['jk'],
                'tempat_lahir' => $row['tempat_lahir'],
                'tgl_lahir' => $row['tgl_lahir'],
                'alamat' => $row['alamat'],
                'email' => $row['email'],
                'no_hp' => $row['no_hp'],
                'status' => 'Non Penerima'
            ]);
        }
    }
}
