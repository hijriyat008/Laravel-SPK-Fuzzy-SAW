<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;

class Profil_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        return view('user.profil', [
            "title" => "Profil",
            "dataset" => $dataset
        ]);
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
        if ($request->nim != auth()->user()->dataset->nim) {
            $rules['nim'] = 'required|max:255|unique:datasets';
        }
        if ($request->email != auth()->user()->dataset->email) {
            $rules['email'] = 'required|max:255|unique:datasets|email:dns';
        }
        if ($request->no_hp != auth()->user()->dataset->no_hp) {
            $rules['no_hp'] = 'required|unique:datasets';
        }

        $validateData = $request->validate($rules);


        Dataset::where('id', auth()->user()->dataset->id)->update($validateData);
        return redirect('/profil_user/' . auth()->user()->dataset->id . '/edit')->with('Success', 'Profil has been Updated..');
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
