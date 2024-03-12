<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToCollection, WithHeadingRow
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
            User::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'username' => $row['username'],
                'password' => Hash::make($row['password']),

            ]);
        }
    }
}
