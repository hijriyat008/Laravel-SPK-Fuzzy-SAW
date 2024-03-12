<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\Datahitung;
use App\Models\Datahasil;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatahasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Datahasil::with(['dataset', 'datahitung'])->latest()->get()
                ->whereIn('status', ['Belum Menerima', 'Not Valid', 'Valid']);
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action_datahasil',
                    function ($data) {
                        return view('admin.datahasil.action', [
                            "data" => $data
                        ]);
                    }
                )->rawColumns(['action2_datahasil'])
                ->addColumn(
                    'action2_datahasil',
                    function ($data) {
                        return view('admin.datahasil.action2', [
                            "data" => $data
                        ]);
                    }
                )->rawColumns(['action2_datahasil'])
                ->make(true);
        }
        return view('admin.datahasil.index', [
            "title" => "Data Penerima",
            "dataset" => Dataset::with(['datahitung', 'datahasil'])->get(),
            "data" => Datahasil::with(['datahitung', 'dataset'])->get()

        ]);
    }

    public function index_penerima(Request $request)
    {
        if ($request->ajax()) {
            $data = Datahasil::with(['dataset', 'datahitung'])->latest()->get()
                ->where('status', 'Sudah Menerima');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action_datahasil',
                    function ($data) {
                        return view('admin.datahasil.action', [
                            "data" => $data
                        ]);
                    }
                )->rawColumns(['action2_datahasil'])
                ->addColumn(
                    'action2_datahasil',
                    function ($data) {
                        return view('admin.datahasil.action2', [
                            "data" => $data
                        ]);
                    }
                )->rawColumns(['action2_datahasil'])
                ->make(true);
        }
        return view('admin.datahasil.index_penerima', [
            "title" => "Data Penerima",
            "dataset" => Dataset::with(['datahitung', 'datahasil'])->get(),
            "data" => Datahasil::with(['datahitung', 'dataset'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datahasil  $datahasil
     * @return \Illuminate\Http\Response
     */
    public function show(Datahasil $datahasil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datahasil  $datahasil
     * @return \Illuminate\Http\Response
     */
    public function edit(Datahasil $datahasil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datahasil  $datahasil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datahasil $datahasil)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datahasil  $datahasil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datahasil $datahasil)
    {
        Datahasil::destroy($datahasil->id);
        Dataset::where('id', $datahasil->dataset_id)
            ->update(['status' => 'Non Penerima']);
        return redirect('/admin/datahasils')->with('Success', 'Dataset has been Deleted..');
    }

    public function salurkan(Datahasil $datahasil)
    {
        Datahasil::where('id', $datahasil->id)
            ->update([
                'status' => 'Sudah Menerima',
                'tgl_penerimaan' => date('Y-m-d')
            ]);
        return redirect('/admin/datahasils')->with('Success', 'Dataset Success Verification.');
    }

    public function valid(Datahasil $datahasil)
    {
        Datahasil::where('id', $datahasil->id)
            ->update([
                'status' => 'Valid',
            ]);
        return redirect('/admin/datahasils')->with('Success', 'Dataset Success Verification.');
    }

    public function notvalid(Datahasil $datahasil)
    {
        Datahasil::where('id', $datahasil->id)
            ->update([
                'status' => 'Not Valid',
            ]);
        return redirect('/admin/datahasils')->with('Success', 'Dataset Success Verification.');
    }
}
