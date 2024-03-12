<?php

namespace App\Http\Controllers;

use App\Models\Datahitung;
use Illuminate\Http\Request;

class VerifDatahitung_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Datahitung::all();
        return view('user.verif_datahitung', [
            "title" => "Verifikasi Data",
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $validateData['dataset_id'] = auth()->user()->dataset->id;
        $validateData['status'] = 'Proses';


        Datahitung::create($validateData);
        return redirect('/verif_datahitung')->with('Success', 'Datahitung has been Added..');
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
        $validateData['dataset_id'] = auth()->user()->dataset->id;
        $validateData['status'] = 'Proses';


        Datahitung::where('id', auth()->user()->dataset->datahitung->id)->update($validateData);
        return redirect('/verif_datahitung')->with('Success', 'Datahitung has been Updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datahitung  $datahitung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datahitung $datahitung)
    {
        //
    }
}
