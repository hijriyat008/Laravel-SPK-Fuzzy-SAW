<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\Datahitung;
use App\Models\File;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DatahitungsExport;
use App\Imports\DatahitungsImport;

class DatahitungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Dataset $dataset)
    {
        $validateData = $request->validate([
            'penghasilan_orangtua' => 'required|max:255',
            'tanggungan_orangtua' => 'required|max:255',
            'status_rumah' => 'required',
            'kondisi_rumah' => 'required',
            'aset' => 'required|max:255',
            'kendaraan' => 'required|max:255',
            'usia' => 'required|max:255',
            'bantuan' => 'required|max:255',
            'ipk' => 'required|max:255',

        ]);
        $validateData['dataset_id'] = $dataset->id;
        $validateData['status'] = 'Proses';


        Datahitung::create($validateData);
        return redirect('/admin/datasets')->with('Success', 'Datahitung has been Added..');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datahitung  $datahitung
     * @return \Illuminate\Http\Response
     */
    public function show(Datahitung $datahitung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datahitung  $datahitung
     * @return \Illuminate\Http\Response
     */
    public function edit(Datahitung $datahitung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datahitung  $datahitung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datahitung $datahitung)
    {
        $rules = [
            'penghasilan_orangtua' => 'required|max:255',
            'tanggungan_orangtua' => 'required|max:255',
            'status_rumah' => 'required',
            'kondisi_rumah' => 'required',
            'aset' => 'required|max:255',
            'kendaraan' => 'required|max:255',
            'usia' => 'required|max:255',
            'bantuan' => 'required|max:255',
            'ipk' => 'required|max:255'
        ];

        $validateData = $request->validate($rules);

        Datahitung::where('id', $datahitung->id)->update($validateData);
        return redirect('/admin/datasets')->with('Success', 'Datahitung has been Updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datahitung  $datahitung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datahitung $datahitung)
    {
        Datahitung::destroy($datahitung->id);
        return redirect('/admin/datasets')->with('Success', 'Datahitung has been Deleted..');
    }

    public function verif(Datahitung $datahitung)
    {
        Datahitung::where('id', $datahitung->id)
            ->update(['status' => 'Valid']);
        return redirect('/admin/datasets')->with('Success', 'Dataset Success Verification.');
    }

    public function notverif(Datahitung $datahitung)
    {
        Datahitung::where('id', $datahitung->id)
            ->update(['status' => 'Not Valid']);
        return redirect('/admin/datasets')->with('Success', 'Dataset Success Verification.');
    }


    public function reset()
    {
        Datahitung::truncate();
        File::truncate();
        return redirect('/admin/datasets')->with('Success', 'Datahitung has been Reset..');
    }

    public function datahitungExport()
    {
        return Excel::download(new DatahitungsExport, 'datahitungs.xlsx');
    }
    public function datahitungImport(Request $request)
    {
        $file = $request->file('file');
        $nameFile = $file->getClientOriginalName();
        $file->move('Data', $nameFile);

        Excel::import(new DatahitungsImport, public_path('/Data/' . $nameFile));
        return redirect('/admin/datasets')->with('Success', 'Datahitung has been Import');
    }
}
