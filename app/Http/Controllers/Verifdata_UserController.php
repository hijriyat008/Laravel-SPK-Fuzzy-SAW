<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;

class Verifdata_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.verif_data', [
            "title" => "Verifikasi Data"
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
            'no_hp' => ['required', 'unique:datasets'],

        ]);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['status'] = 'Non Penerima';

        Dataset::create($validateData);
        return redirect('/dashboard')->with('Success', 'Dataset has been Added..');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function show(Dataset $dataset)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataset $dataset)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataset $dataset)
    {
        //
    }
}
