<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\Datahitung;
use App\Models\Datahasil;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function user()
    {
        $data_penerima = Datahasil::latest()->get()->whereIn('status', ['Belum Menerima', 'Not Valid', 'Valid'])->IsEmpty();
        $data_penerimaan = Datahasil::latest()->get()->where('status', ['Sudah Menerima'])->IsEmpty();
        return view('user.dashboard', [
            'title' => "KSAJ",
            "data_penerima" => $data_penerima,
            "data_penerima" => $data_penerima,
        ]);
    }

    public function admin()
    {
        $data_target = Dataset::count();
        $data_kriteria = Datahitung::count();
        $data_validasi = Datahitung::all()->where('status', 'Sudah Verifikasi')->count();
        $data_penerima = Datahasil::count();
        return view('admin.dashboard', [
            'title' => "KSAJ",
            "data_target" => $data_target,
            "data_validasi" => $data_validasi,
            "data_kriteria" => $data_kriteria,
            "data_penerima" => $data_penerima,

        ]);
    }
}
