<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\Datahitung;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DatasetsExport;
use App\Imports\DatasetsImport;

class DatasetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Dataset::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action_dataset',
                    function ($data) {
                        return view('admin.dataset.action', [
                            "data" => $data
                        ]);
                    }
                )->rawColumns(['action_dataset'])
                ->addColumn(
                    'action_datahitung',
                    function ($data) {
                        return view('admin.datahitung.action', [
                            "data" => $data
                        ]);
                    }
                )->rawColumns(['action_datahitung'])
                ->make(true);
        }
        return view('admin.dataset.index', [
            "title" => "Data Target Penerima",
            "dataset" => Dataset::get()->load('datahitung', 'file')
        ]);
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
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|max:255|unique:datasets',
            'jk' => 'required',
            'tempat_lahir' => 'required|max:255',
            'tgl_lahir' => 'required',
            'alamat' => 'required|max:255',
            'email' => ['required', 'max:255', 'unique:datasets', 'email:dns'],
            'no_hp' => ['required', 'min:12', 'max:12', 'unique:datasets'],

        ]);
        $validateData['status'] = 'Non Penerima';

        Dataset::create($validateData);
        return redirect('/admin/datasets')->with('Success', 'Dataset has been Added..');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function show(Dataset $dataset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataset $dataset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataset $dataset)
    {
        $rules = [
            'nama' => 'required|max:255',
            'jk' => 'required',
            'tempat_lahir' => 'required|max:255',
            'tgl_lahir' => 'required',
            'alamat' => 'required|max:255'

        ];
        if ($request->nim != $dataset->nim) {
            $rules['nim'] = 'required|max:255|unique:datasets';
        }
        if ($request->email != $dataset->email) {
            $rules['email'] = 'required|max:255|unique:datasets|email:dns';
        }
        if ($request->no_hp != $dataset->no_hp) {
            $rules['no_hp'] = 'required|unique:datasets';
        }

        $validateData = $request->validate($rules);

        Dataset::where('id', $dataset->id)->update($validateData);
        return redirect('/admin/datasets')->with('Success', 'Dataset has been Updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataset $dataset)
    {
        if (empty($dataset->datahitung->dataset_id)) {
            Dataset::destroy($dataset->id);
            return redirect('/admin/datasets')->with('Success', 'Dataset has been Deleted.');
            # code...
        } else {
            Dataset::destroy($dataset->id);
            Datahitung::where('dataset_id', $dataset->id)->delete();
            return redirect('/admin/datasets')->with('Success', 'Dataset and Datahitung has been Deleted.');
        }
    }

    public function datasetExport()
    {
        return Excel::download(new DatasetsExport, 'datasets.xlsx');
    }

    public function datasetImport(Request $request)
    {
        $file = $request->file('file');
        $nameFile = $file->getClientOriginalName();
        $file->move('Data', $nameFile);

        Excel::import(new DatasetsImport, public_path('/Data/' . $nameFile));
        return redirect('/admin/datasets')->with('Success', 'Dataset has been Import');
    }
}
