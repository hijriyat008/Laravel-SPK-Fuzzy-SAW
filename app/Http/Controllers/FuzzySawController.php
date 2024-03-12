<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Dataset;
use App\Models\Datahitung;
use App\Models\Datahasil;
use App\Models\Kriteria;
use mysqli;
use PHPUnit\Framework\Constraint\IsEmpty;

class FuzzySawController extends Controller
{
    public function index(Request $request)
    {
        $data = Datahitung::latest()->get()->load('dataset')
            ->where('dataset.status', 'Non Penerima')
            ->where('status', 'Valid');

        $data_hitung = Datahitung::latest()->get()->load('dataset')
            ->where('dataset.status', 'Non Penerima')
            ->where('status', 'Valid')
            ->IsEmpty();

        foreach ($data as $key) {
            $key->c1 = 'Rp' . number_format($key->penghasilan_orangtua, 0, ',', '.') . '/bln';
            $key->c2 = $key->tanggungan_orangtua . ' Orang';
            $key->c3 = $key->status_rumah;
            $key->c4 = $key->kondisi_rumah;
            $key->c5 = $key->aset;
            $key->c6 = $key->kendaraan;
            $key->c7 = $key->usia;
            $key->c8 = $key->bantuan;
            $key->c9 = $key->ipk;
        }
        if ($request->ajax()) {
            $data = $data;
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.proses_hitung.index', [
            "title" => "Proses Hitung Data",
            "data_hitung" => $data_hitung

        ]);
    }

    public function convertFuzzy()
    {
        $data = Datahitung::latest()->get()->load('dataset')
            ->where('dataset.status', 'Non Penerima')
            ->where('status', 'Valid');
        $i = 0;
        $i++;
        foreach ($data as $key) {
            // alternatif
            $key->alternatif = 'A' . sprintf("%04s", $i++);
            // c1
            $c1 = $key->penghasilan_orangtua / 4000000;
            $key->c1 = $c1;
            // c2
            if ($key->tanggungan_orangtua == 1) {
                $key->c2 = 0.25;
            } elseif ($key->tanggungan_orangtua == 2) {
                $key->c2 = 0.5;
            } elseif ($key->tanggungan_orangtua == 3) {
                $key->c2 = 0.75;
            } else {
                $key->c2 = 1;
            }
            // c3
            if ($key->status_rumah == 'Menumpang') {
                $key->c3 = 0.25;
            } elseif ($key->status_rumah == 'Sewa') {
                $key->c3 = 0.5;
            } elseif ($key->status_rumah == 'Warisan') {
                $key->c3 = 0.75;
            } else {
                $key->c3 = 1;
            }
            // c4
            if ($key->kondisi_rumah == 'Kayu') {
                $key->c4 = 0.25;
            } elseif ($key->kondisi_rumah == 'Semi Permanen') {
                $key->c4 = 0.5;
            } elseif ($key->kondisi_rumah == 'Permanen (Non Plaster)') {
                $key->c4 = 0.75;
            } else {
                $key->c4 = 1;
            }
            // c5
            $c5 = (6000000 - $key->aset) / 6000000;
            $key->c5 = $c5;
            // c6
            if ($key->kendaraan == 0) {
                $key->c6 = 0.25;
            } elseif ($key->kendaraan == 1) {
                $key->c6 = 0.5;
            } elseif ($key->kendaraan == 2) {
                $key->c6 = 0.75;
            } else {
                $key->c6 = 1;
            }
            // c7
            if ($key->usia <= 18) {
                $key->c7 = 0.25;
            } elseif ($key->usia == 19) {
                $key->c7 = 0.5;
            } elseif ($key->usia == 20) {
                $key->c7 = 0.5;
            } elseif ($key->usia == 21) {
                $key->c7 = 0.75;
            } elseif ($key->usia == 22) {
                $key->c7 = 0.75;
            } else {
                $key->c7 = 1;
            }
            // c8
            $c8 = (2000000 - $key->bantuan) / 2000000;
            $key->c8 = $c8;
            // c9
            $c9 = $key->ipk / 4;
            $key->c9 = $c9;
        }
        return $data;
    }
    public function normalisasi()
    {
        $a1 = Kriteria::where('kode_kriteria', '1')->value('atribut');
        $a2 = Kriteria::where('kode_kriteria', '2')->value('atribut');
        $a3 = Kriteria::where('kode_kriteria', '3')->value('atribut');
        $a4 = Kriteria::where('kode_kriteria', '4')->value('atribut');
        $a5 = Kriteria::where('kode_kriteria', '5')->value('atribut');
        $a6 = Kriteria::where('kode_kriteria', '6')->value('atribut');
        $a7 = Kriteria::where('kode_kriteria', '7')->value('atribut');
        $a8 = Kriteria::where('kode_kriteria', '8')->value('atribut');
        $a9 = Kriteria::where('kode_kriteria', '9')->value('atribut');

        $data = $this->convertFuzzy();
        foreach ($data as $key) {
            $temp_c1[] = $key->c1;
            $temp_c2[] = $key->c2;
            $temp_c3[] = $key->c3;
            $temp_c4[] = $key->c4;
            $temp_c5[] = $key->c5;
            $temp_c6[] = $key->c6;
            $temp_c7[] = $key->c7;
            $temp_c8[] = $key->c8;
            $temp_c9[] = $key->c9;
        }
        foreach ($data as $key) {
            if ($a1 === 'cost') {
                $key->n_c1 = round((min($temp_c1) / $key->c1), 3);
            } else {
                $key->n_c1 = round(($key->c1 / max($temp_c1)), 3);
            }
            if ($a2 === 'cost') {
                $key->n_c2 = round((min($temp_c2) / $key->c2), 3);
            } else {
                $key->n_c2 = round(($key->c2 / max($temp_c2)), 3);
            }
            if ($a3 === 'cost') {
                $key->n_c3 = round((min($temp_c3) / $key->c3), 3);
            } else {
                $key->n_c3 = round(($key->c3 / max($temp_c3)), 3);
            }
            if ($a4 === 'cost') {
                $key->n_c4 = round((min($temp_c4) / $key->c4), 3);
            } else {
                $key->n_c4 = round(($key->c4 / max($temp_c4)), 3);
            }
            if ($a5 === 'cost') {
                $key->n_c5 = round((min($temp_c5) / $key->c5), 3);
            } else {
                $key->n_c5 = round(($key->c5 / max($temp_c5)), 3);
            }
            if ($a6 === 'cost') {
                $key->n_c6 = round((min($temp_c6) / $key->c6), 3);
            } else {
                $key->n_c6 = round(($key->c6 / max($temp_c6)), 3);
            }
            if ($a7 === 'cost') {
                $key->n_c7 = round((min($temp_c7) / $key->c7), 3);
            } else {
                $key->n_c7 = round(($key->c7 / max($temp_c7)), 3);
            }
            if ($a8 === 'cost') {
                $key->n_c8 = round((min($temp_c8) / $key->c8), 3);
            } else {
                $key->n_c8 = round(($key->c8 / max($temp_c8)), 3);
            }
            if ($a9 === 'cost') {
                $key->n_c9 = round((min($temp_c9) / $key->c9), 3);
            } else {
                $key->n_c9 = round(($key->c9 / max($temp_c9)), 3);
            }
        }
        return $data;
    }
    public function prefensi()
    {
        $b1 = Kriteria::where('kode_kriteria', '1')->value('bobot');
        $b2 = Kriteria::where('kode_kriteria', '2')->value('bobot');
        $b3 = Kriteria::where('kode_kriteria', '3')->value('bobot');
        $b4 = Kriteria::where('kode_kriteria', '4')->value('bobot');
        $b5 = Kriteria::where('kode_kriteria', '5')->value('bobot');
        $b6 = Kriteria::where('kode_kriteria', '6')->value('bobot');
        $b7 = Kriteria::where('kode_kriteria', '7')->value('bobot');
        $b8 = Kriteria::where('kode_kriteria', '8')->value('bobot');
        $b9 = Kriteria::where('kode_kriteria', '9')->value('bobot');

        $data = $this->normalisasi();
        foreach ($data as $key) {
            $key->p_c1 = round(($key->n_c1 * ($b1 / 100)), 3);
            $key->p_c2 = round(($key->n_c2 * ($b2 / 100)), 3);
            $key->p_c3 = round(($key->n_c3 * ($b3 / 100)), 3);
            $key->p_c4 = round(($key->n_c4 * ($b4 / 100)), 3);
            $key->p_c5 = round(($key->n_c5 * ($b5 / 100)), 3);
            $key->p_c6 = round(($key->n_c6 * ($b6 / 100)), 3);
            $key->p_c7 = round(($key->n_c7 * ($b7 / 100)), 3);
            $key->p_c8 = round(($key->n_c8 * ($b8 / 100)), 3);
            $key->p_c9 = round(($key->n_c9 * ($b9 / 100)), 3);
            $key->total_prefensi = round(($key->p_c1 + $key->p_c2 + $key->p_c3 + $key->p_c4 + $key->p_c5 + $key->p_c6 + $key->p_c7 + $key->p_c8 + $key->p_c9), 3);
        }
        return $data;
    }
    public function hasil()
    {
        $data = $this->prefensi()->sortByDesc('total_prefensi');
        $i = 1;
        foreach ($data as $key) {
            $key->rank = $i++;
        }
        return $data;
    }

    public function indexConvert(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->convertFuzzy();
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        $data_hitung = Datahitung::latest()->get()->load('dataset')
            ->where('dataset.status', 'Non Penerima')
            ->where('status', 'Valid')
            ->IsEmpty();

        return view('admin.proses_hitung.convert', [
            "title" => "Convert",
            "data_hitung" => $data_hitung

        ]);
    }
    public function indexNormalisasi(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->normalisasi();
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        $data_hitung = Datahitung::latest()->get()->load('dataset')
            ->where('dataset.status', 'Non Penerima')
            ->where('status', 'Valid')
            ->IsEmpty();

        return view('admin.proses_hitung.normalisasi', [
            "title" => "Normalisasi",
            "data_hitung" => $data_hitung

        ]);
    }
    public function indexPrefensi(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->prefensi();
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        $data_hitung = Datahitung::latest()->get()->load('dataset')
            ->where('dataset.status', 'Non Penerima')
            ->where('status', 'Valid')
            ->IsEmpty();

        return view('admin.proses_hitung.prefensi', [
            "title" => "Prefensi",
            "data_hitung" => $data_hitung

        ]);
    }
    public function indexHasil(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->hasil();
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        $data_hitung = Datahitung::latest()->get()->load('dataset')
            ->where('dataset.status', 'Non Penerima')
            ->where('status', 'Valid')
            ->IsEmpty();

        $data_hasil = Datahasil::latest()->get()->load(['dataset', 'datahitung'])
            ->where('status', 'Belum Menerima')
            ->IsEmpty();

        return view('admin.proses_hitung.hasil', [
            "title" => "Hasil",
            "data_hitung" => $data_hitung,
            "data_hasil" => $data_hasil


        ]);
    }
    public function tentukan_penerima(Request $request)
    {
        $range = $request['data'];
        $data = $this->hasil()->whereBetween('rank', [1, $range]);
        foreach ($data as $key) {
            $dataset_id[] = $key->dataset_id;
            $datahitung_id[] = $key->id;
        }
        foreach ($data as $key) {
            $data_hitung[] = array(
                'dataset_id' => $key->dataset_id,
                'datahitung_id' => $key->id,
                'status' => 'Belum Menerima',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );
        }
        Dataset::whereIn('id', $dataset_id)
            ->update(['status' => 'Penerima']);
        Datahasil::insert($data_hitung);

        return redirect('/admin/hasil')->with('Success', 'Datahasil has been Added..');
    }
    public function test()
    {
        $a1 = Kriteria::where('kode_kriteria', '1')->value('atribut');

        echo $a1;
    }
}
